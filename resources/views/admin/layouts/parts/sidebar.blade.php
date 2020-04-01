<!--
  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

  Tip 2: you can also add an image using data-image tag
-->
<div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        RaimSport
    </a></div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item active  ">
            <a class="nav-link" href="{{route('home')}}">
                <i class="material-icons">dashboard</i>
                <p>Главное</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('branch.index')}}">
                <i class="material-icons">library_books</i>
                <p>Ветки</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('category.index')}}">
                <i class="material-icons">bubble_chart</i>
                <p>Категории</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('project.index')}}">
                <i class="material-icons">book</i>
                <p>Проекты</p>
            </a>
        </li>
    </ul>
</div>
