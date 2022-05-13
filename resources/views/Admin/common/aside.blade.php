<aside>
    <ul>
        <li>
            <a href="/Adminpage">
                Home page
            </a>
        </li>
        <li>
            <a href="manageuser">
                Manage User
            </a>
        </li>
        <li>
            <a href="checkorder">
                Check order
            </a>
        </li>
    </ul>
</aside>


<script>
    $('aside li a').each(function() {
        if (this.href === window.location.href) {
            $(this).parent().addClass('active');
        }
    })
</script>
