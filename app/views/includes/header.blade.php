<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Asareri</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('blogs') }}">View All Blogs</a></li>
        <li><a href="{{ URL::to('blogs/create') }}">Create a Blog</a></li>
    </ul>
</nav>