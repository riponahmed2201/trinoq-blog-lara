<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">



        <li><a><i class="fa fa-edit"></i> Category <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('add-category')}}">Add Post</a></li>
              <li><a href="{{route('manage-category')}}">Manage Category</a></li>
            </ul>
          </li> 
  
    
          <li><a><i class="fa fa-edit"></i> Post <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('add-post')}}">Add Post</a></li>
              <li><a href="{{route('manage-post')}}">Manage Post</a></li>
            </ul>
          </li> 

        <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="#level1_1">Level One</a>
                <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li class="sub_menu"><a href="level2.html">Level Two</a>
                    </li>
                    <li><a href="#level2_1">Level Two</a>
                    </li>
                    <li><a href="#level2_2">Level Two</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#level1_2">Level One</a>
                </li>
            </ul>
          </li>  
      </ul>
    </div>
  </div>