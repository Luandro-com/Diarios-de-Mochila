<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("The email is not correct");
        return false;
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("You must accept the privacy statement");
        return false;
    }
    return true;
}
}
//]]>
</script>
<div class="subscribe-wrapper">
    <form class="field subscribe-field" method="post" action="http://diariosdemochila.com/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
      <input type="email" name="ne" size="30" required placeholder="Siga-nos / Síganos" />
      <button type="submit" value="email"><span class="glyphicon glyphicon-send"></span></button>
    </form>
</div>
