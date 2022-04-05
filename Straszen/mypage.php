<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<form style="display: none;">
    <label for="lang-switch">
        <div lang="de">Sprache</div>
        <div lang="en">Language</div>
    </label>
    <select id="lang-switch">
        <option value="en">English</option>
        <option value="de" selected>Deutsch</option>
    </select>
</form>
<p>
    <div lang="de" style="border: 1px solid #222;
font-size: 48px;
position: relative;
top: 50%;
transform: translateY(-50%);
padding: 30px;
margin-left: 10%;
margin-right: 10%;
}"><?php
include 'random_divs.php';

echo $divs[array_rand($divs)];
?></div>
    <div lang="en" style="border: 1px solid #222;
font-size: 48px;
position: relative;
top: 50%;
transform: translateY(-50%);
padding: 30px;
margin-left: 10%;
margin-right: 10%;
}"><?php
include 'random_divs-eng.php';

echo $divs[array_rand($divs)];
?></div>
</p>
<script type="text/javascript">
var langStr;

    $('div[lang]').hide();
    if (document.cookie.indexOf("lang=") >= 0) {
        langStr = document.cookie.indexOf("lang=");
        langStr = document.cookie.substring(langStr + 5, langStr + 7);
        $('#lang-switch option')
            .removeAttr('selected')
            .filter('[value=' + langStr + ']')
            .attr('selected', true);
        langStr = '[lang="' + langStr + '"]';
        console.log(langStr);
        $(langStr).show();
    } else {
        // No cookie - show default language
        $("[lang='de']").show();
    }

    $('#lang-switch').change(function () {
        var CookieDate = new Date, tmp;
        CookieDate.setFullYear(CookieDate.getFullYear() +10);
        var lang = $(this).val();
        switch (lang) {
            case 'en':
                $('div[lang]').hide();
                $('div[lang="en"]').show();
                document.cookie = "lang=en; expires=" + CookieDate.toUTCString() + "; path=/";
                break;
            default:
                $('div[lang]').hide();
                $('div[lang="de"]').show();
                document.cookie = "lang=de; expires=" + CookieDate.toUTCString() + ";path=/";
        }
    });
</script>

