<div class="hidden lg:fixed lg:inset-y-0 lg:z-40 lg:flex lg:w-72 lg:flex-col">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-grow overflow-y-auto bg-red-100 border-r">
        <div class="flex space-x-1 px-6 py-2 items-center justify-between ">
          <a class="text-lg font-semibold tracking-tighter text-black focus:outline-none focus:ring " href="/">
            <img src="{{ asset('images/pawnlogo.png') }}" class="h-10" alt="">
          </a>
          <div class="w-2 h-2 bg-green-600 rounded-full animate-pulse"></div>
          <div class="text-xs font-semibold text-gray-500">[Tacurong Branch]</div>
        </div>
        <div class="flex flex-col flex-grow">
          <nav class="flex-1 space-y-1 py-3 bg-white">
            <ul>
              <li>
                <a class="{{request()->routeIs('admin.dashboard') ? 'bg-red-50 fill-red-500 scale-95 text-red-500 font-semibold' : ''}} inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-50 uppercase font-medium hover:scale-95 hover:text-red-500 hover:fill-red-500"
                  href="{{route('admin.dashboard')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 ">
                    <path
                      d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12 5C8.13401 5 5 8.13401 5 12C5 13.8525 5.71957 15.5368 6.89445 16.7889L7.05025 16.9497L8.46447 15.5355C7.55964 14.6307 7 13.3807 7 12C7 9.23858 9.23858 7 12 7C12.448 7 12.8822 7.05892 13.2954 7.16944L14.8579 5.60806C13.9852 5.21731 13.018 5 12 5ZM18.3924 9.14312L16.8306 10.7046C16.9411 11.1178 17 11.552 17 12C17 13.3807 16.4404 14.6307 15.5355 15.5355L16.9497 16.9497C18.2165 15.683 19 13.933 19 12C19 10.9824 18.7829 10.0155 18.3924 9.14312ZM16.2426 6.34315L12.517 10.0675C12.3521 10.0235 12.1788 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12C14 11.8212 13.9765 11.6479 13.9325 11.483L17.6569 7.75736L16.2426 6.34315Z">
                    </path>
                  </svg>
                  <span class="ml-3">
                    Dashboard
                  </span>
                </a>
              </li>

            </ul>
            <p class="px-4 pt-2 text-xs font-semibold text-red-400 uppercase">
              MANAGE
            </p>
            <ul>
              <li>
                <div x-data="{ open: false }">
                  <button
                    class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-50 uppercase font-medium hover:scale-95 hover:text-red-500 hover:fill-red-500"
                    @click="open = ! open">
                    <span class="inline-flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                        <path
                          d="M20 10H4V19H20V10ZM3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM5 6V8H7V6H5ZM9 6V8H11V6H9ZM5 11H8V16H5V11Z">
                        </path>
                      </svg>
                      <span class="ml-3">
                        Data Entry
                      </span>
                    </span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                      class="inline w-5 h-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                  <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
                    <ul>
                      <li>
                        <a href="#" title="#"
                          class="inline-flex items-center w-full p-2 pl-3 text-sm font-light text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                          <span class="inline-flex items-center w-full">
                            <ion-icon class="w-4 h-4 md hydrated" name="document-outline" role="img"
                              aria-label="document outline"></ion-icon>
                            <span class="ml-4">
                              Guides
                            </span>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="#" title="#"
                          class="inline-flex items-center w-full p-2 pl-3 text-sm font-light text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
                          <span class="inline-flex items-center w-full">
                            <ion-icon class="w-4 h-4 md hydrated" name="mail-outline" role="img"
                              aria-label="mail outline"></ion-icon>
                            <span class="ml-4">
                              Email
                            </span>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-50 uppercase font-medium hover:scale-95 hover:text-red-500 hover:fill-red-500"
                  href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                    <path
                      d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z">
                    </path>
                  </svg>
                  <span class="ml-3">
                    Customer
                  </span>
                </a>
              </li>
              <li>
                <a class="{{request()->routeIs('admin.interest') ? 'bg-red-50 fill-red-500 scale-95 text-red-500 font-semibold' : ''}} inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-50 uppercase font-medium hover:scale-95 hover:text-red-500 hover:fill-red-500"
                  href="{{route('admin.interest')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                    <path
                      d="M3.00488 3.00293H21.0049C21.5572 3.00293 22.0049 3.45064 22.0049 4.00293V20.0029C22.0049 20.5552 21.5572 21.0029 21.0049 21.0029H3.00488C2.4526 21.0029 2.00488 20.5552 2.00488 20.0029V4.00293C2.00488 3.45064 2.4526 3.00293 3.00488 3.00293ZM9.00488 11.0029V9.00293H7.00488V11.0029H5.00488V13.0029H7.00488V15.0029H9.00488V13.0029H11.0049V11.0029H9.00488ZM13.0049 11.0029V13.0029H19.0049V11.0029H13.0049Z">
                    </path>
                  </svg>
                  <span class="ml-3">
                    Interest
                  </span>
                </a>
              </li>
              <li>
                <a class="{{request()->routeIs('admin.category') ? 'bg-red-50 fill-red-500 scale-95 text-red-500 font-semibold' : ''}} inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-50 uppercase font-medium hover:scale-95 hover:text-red-500 hover:fill-red-500"
                  href="{{route('admin.category')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM5 7V9H7V7H5ZM5 11V13H7V11H5ZM5 15V17H19V15H5ZM9 11V13H11V11H9ZM9 7V9H11V7H9ZM13 7V9H15V7H13ZM17 7V9H19V7H17ZM13 11V13H15V11H13ZM17 11V13H19V11H17Z"></path></svg>
                  <span class="ml-3">
                    Category
                  </span>
                </a>
              </li>
            </ul>
            <p class="px-4 pt-2 text-xs font-semibold text-red-400 uppercase">
              MAINTENANCE
            </p>
            <ul>

              <li>
                <a class="{{request()->routeIs('admin.users') ? 'bg-red-50 fill-red-500 scale-95 text-red-500 font-semibold' : ''}} inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-50 uppercase font-medium hover:scale-95 hover:text-red-500 hover:fill-red-500"
                  href="{{route('admin.users')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                    <path
                      d="M10 19.748V16.4C10 15.1174 10.9948 14.1076 12.4667 13.5321C11.5431 13.188 10.5435 13 9.5 13C7.61013 13 5.86432 13.6168 4.45286 14.66C5.33199 17.1544 7.41273 19.082 10 19.748ZM18.8794 16.0859C18.4862 15.5526 17.1708 15 15.5 15C13.4939 15 12 15.7967 12 16.4V20C14.9255 20 17.4843 18.4296 18.8794 16.0859ZM9.55 11.5C10.7926 11.5 11.8 10.4926 11.8 9.25C11.8 8.00736 10.7926 7 9.55 7C8.30736 7 7.3 8.00736 7.3 9.25C7.3 10.4926 8.30736 11.5 9.55 11.5ZM15.5 12.5C16.6046 12.5 17.5 11.6046 17.5 10.5C17.5 9.39543 16.6046 8.5 15.5 8.5C14.3954 8.5 13.5 9.39543 13.5 10.5C13.5 11.6046 14.3954 12.5 15.5 12.5ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22Z">
                    </path>
                  </svg>
                  <span class="ml-3">
                    Users
                  </span>
                </a>
              </li>
              <li>
                <a class="{{request()->routeIs('admin.role') ? 'bg-red-50 fill-red-500 scale-95 text-red-500 font-semibold' : ''}} inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-50 uppercase font-medium hover:scale-95 hover:text-red-500 hover:fill-red-500"
                  href="{{route('admin.role')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                    <path
                      d="M3 4.99509C3 3.89323 3.89262 3 4.99509 3H19.0049C20.1068 3 21 3.89262 21 4.99509V19.0049C21 20.1068 20.1074 21 19.0049 21H4.99509C3.89323 21 3 20.1074 3 19.0049V4.99509ZM6.35687 18H17.8475C16.5825 16.1865 14.4809 15 12.1022 15C9.72344 15 7.62182 16.1865 6.35687 18ZM12 13C13.933 13 15.5 11.433 15.5 9.5C15.5 7.567 13.933 6 12 6C10.067 6 8.5 7.567 8.5 9.5C8.5 11.433 10.067 13 12 13Z">
                    </path>
                  </svg>
                  <span class="ml-3">
                    Roles
                  </span>
                </a>
              </li>
              <li>
                <a class="{{request()->routeIs('admin.branches') ? 'bg-red-50 fill-red-500 scale-95 text-red-500 font-semibold' : ''}} inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 fill-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-red-50 uppercase font-medium hover:scale-95 hover:text-red-500 hover:fill-red-500"
                  href="{{route('admin.branches')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"><path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H17V9H20C20.5523 9 21 9.44772 21 10V19ZM7 11V13H11V11H7ZM7 7V9H11V7H7Z"></path></svg>
                  <span class="ml-3">
                    Branches
                  </span>
                </a>
              </li>
            </ul>
          </nav>

        </div>
      </div>
    </div>