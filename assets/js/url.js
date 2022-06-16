var loc = window.location.href
const arr_url = {
    // SIDEBAR-ADMIN START
    "admin/posts/index.php": "#admin_posts",
    "admin/topics/index.php": "#topics",
    "admin/users/index.php": "#users",
    "admin/comments/index.php": "#admin_comments",
    "admin/contact/index.php": "#contact",
    // SIDEBAR-ADMIN START

    // SIDEBAR-USER START
    "user_profile/posts/index.php": "#user_posts",
    "user_profile/comments/index.php": "#user_comments"
    // SIDEBAR-USER START
}

for (let key in arr_url) {
    if (loc.includes(key)){
        document.querySelector(arr_url[key]).classList.add("active")
        console.log(key)
    }
}