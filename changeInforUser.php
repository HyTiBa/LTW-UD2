    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="flex max-w-6xl w-full  rounded-2xl  overflow-hidden gap-x-8 p-8">

            <!-- Sidebar -->
            <div class="w-80 bg-white rounded-2xl shadow-md p-6">
              <!-- Cấp bậc -->
              <div class="flex flex-col items-center">
                <div class="w-20 h-20 rounded-full border-4 border-gray-200 flex items-center justify-center">
                  <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6l3 6h6l-4.5 4 1.5 6L12 18l-6 4 1.5-6L3 12h6l3-6z" />
                  </svg>
                </div>
              </div>
        
              <div class="border-t my-5"></div>
        
              <!-- Menu Sidebar -->
              <nav class="space-y-2 text-sm">
                <div>
                  <p class="text-red-600 font-semibold mb-2 text-[18px]">Thông tin tài khoản</p>
                  <ul class="space-y-2 pl-2">
                    <li><a  onclick="showForm('mainForm')" href="#" class="block text-[18px] text-red-500 font-medium hover:text-red-1000 transition">Hồ sơ cá nhân</a></li>
                    <li><a  onclick="showForm('changePass')" href="#" class="block text-[18px] text-red-500 font-medium hover:text-red-1000 transition">Đổi mật khẩu</a></li>
                  </ul>
                </div>
                <div class="pt-3 border-t mt-4">
                  <a href="#" class="flex items-center gap-2 text-gray-700 hover:text-red-500 transition">
                    <span class="text-[18px]"><a href="cart">Đơn hàng của tôi</a></span>
                  </a>
                </div>
              </nav>
            </div>
        
            {{!-- main form --}}
            <div class="mainForm">
              <form action="/user/changeInforUser" method="post" >
                <div class="flex-1 bg-white rounded-2xl shadow-md p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Hồ sơ cá nhân</h2>
              
                    <div class="mb-4">
                      <label class="block text-gray-700 font-medium mb-1">Họ<span class="text-red-500">*</span></label>
                      <input value="{{user_name}}" name="user_lastname"  type="text" placeholder="Nhập họ" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
              
                    <div class="mb-4">
                      <label class="block text-gray-700 font-medium mb-1">Tên<span class="text-red-500">*</span></label>
                      <input value="{{user_lastname}}" name="user_name" type="text" placeholder="Nhập tên" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
              
                    <div class="mb-4">
                      <label class="block text-gray-700 font-medium mb-1">Số điện thoại <span class="text-blue-600 cursor-pointer text-sm">Thay đổi</span></label>
                      <input value="{{user.SDT}}" name="user_telephone" type="text" value="0793472637" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
              
                    <div class="mb-6">
                      <label class="block text-gray-700 font-medium mb-1">Birthday<span class="text-red-500">*</span></label>
                      <div class="grid grid-cols-3 gap-4 mt-2">
                        <input value="{{yearOfBirth}}" name="dateOfBirth" type="text" placeholder="DD" maxlength="2" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <input value="{{monthOfBirth}}" name="monthOfBirth" type="text" placeholder="MM" maxlength="2" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <input value="{{dateOfBirth}}" name="yearOfBirth" type="text" placeholder="YYYY" maxlength="4" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500" />
                      </div>
                    </div>
              
                    <button type="submit" class="w-full bg-red-600 text-white py-3 rounded-xl font-semibold hover:bg-red-700 transition">Lưu thay đổi</button>
                  </div>
             </form>
            </div>
            {{!-- change pass --}}
             <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-2xl changePass hidden">
              <h2 class="text-xl font-semibold text-gray-800 mb-6">Đổi mật khẩu</h2>
          
              <form class="space-y-5" action="/user/changePasswordUser" method="post">
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Mật khẩu hiện tại <span class="text-red-500">*</span></label>
                  <input name="user_old_password" type="password" placeholder="Mật khẩu hiện tại" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
          
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Mật khẩu mới <span class="text-red-500">*</span></label>
                  <input name="user_new_password" type="password" placeholder="Mật khẩu mới" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
          
                <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Nhập lại mật khẩu mới <span class="text-red-500">*</span></label>
                  <input name="user_confirm_new_password" type="password" placeholder="Nhập lại mật khẩu mới" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
          
                <div class="pt-4">
                  <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded-lg transition">Lưu thay đổi</button>
                </div>
              </form>
            </div>
        
          </div>
    </div>
<script>

      function showForm(formClass) {
        const mainForm = document.querySelector('.mainForm');
        const changePass = document.querySelector('.changePass');
    
        if (formClass === 'mainForm') {
          mainForm.classList.remove('hidden');
          changePass.classList.add('hidden');
        } else if (formClass === 'changePass') {
          changePass.classList.remove('hidden');
          mainForm.classList.add('hidden');
        }
      }
    </script>