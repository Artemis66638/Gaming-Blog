<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item_hack_l page-item">
            <a class="page-link_hack page-link" href="?page=1">В начала</a>
        </li>
        <?php if($page > 1): ?>
            <li class="page-item">
                <a class="page-link_hack page-link" href="<?php echo "?page=" . ($page - 1);?>">назад</a>
            </li>
        <?php endif; ?>
        <?php if($page < $total_pages): ?>
        <li class="page-item">
            <a class="page-link_hack page-link" href="<?php echo "?page=" . ($page + 1);?>">вперед</a>
        </li>
        <?php endif; ?>
        <li class="page-item_hack_r page-item">
            <a class="page-link_hack page-link" href="<?php echo "?page=" . $total_pages; ?>">В конец</a>
        </li>
    </ul>
</nav>