<div class="logo"><a href="{{route('client.index')}}" class="simple-text logo-normal">
        RaimSport
    </a></div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item {{{ (Request::is('home') ? 'active' : '') }}}  ">
            <a class="nav-link" href="{{route('home')}}">
                <i class="material-icons">dashboard</i>
                <p>Главное</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('admin/branches') ? 'active' : '') }}}">
            <a class="nav-link" href="{{route('branch.index')}}">
                <i class="material-icons">library_books</i>
                <p>Ветки</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('admin/categories') ? 'active' : '') }}}">
            <a class="nav-link" href="{{route('category.index')}}">
                <i class="material-icons">bubble_chart</i>
                <p>Категории</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('admin/projects') ? 'active' : '') }}}">
            <a class="nav-link" href="{{route('project.index')}}">
                <i class="material-icons">book</i>
                <p>Проекты</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('admin/blogs') ? 'active' : '') }}}">
            <a class="nav-link" href="{{route('blog.index')}}">
                <i class="material-icons">receipt</i>
                <p>Новости</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('admin/services') ? 'active' : '') }}}">
            <a class="nav-link" href="{{route('service.index')}}">
                <i class="material-icons">free_breakfast</i>
                <p>Услуги</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('admin/notes') ? 'active' : '') }}}">
            <a class="nav-link" href="{{route('note.index')}}">
                <i class="material-icons">comment</i>
                <p>Отзывы</p>
            </a>
        </li>
        <li class="nav-item {{{ (Request::is('admin/products') ? 'active' : '') }}}">
            <a class="nav-link" href="{{route('product.index')}}">
                <i class="material-icons">gift</i>
                <p>Продукты</p>
            </a>
        </li>
    </ul>
</div>
