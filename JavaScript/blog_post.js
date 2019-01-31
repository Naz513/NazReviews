function blog_submit_form() {

    var blog_username = document.getElementById('blog_username').value;
    var datetime = document.getElementById('datetime').value;
    var blog_title = document.getElementById('blog_title').value;
    var blog_comment = document.getElementById('blog_comment').value;

    var formData = new FormData();
    formData.append('blog_username', blog_username);
    formData.append('datetime', datetime);
    formData.append('blog_title', blog_title);
    formData.append('blog_comment', blog_comment);


    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint2").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST","PHP/blog_post.php");

    xmlhttp.send(formData);

}
