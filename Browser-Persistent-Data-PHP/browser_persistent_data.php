<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser Persistence Data with PHP</title>
    <link rel="stylesheet" href="../Html/css/html.css">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/styles/default.min.css">
    <script src="http://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/highlight.min.js"></script>
    <script src="/path/to/highlight.pack.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <style>
        body {
            font-family: Myanmar3, Yunghkio;
        }
        
        h2 {
            font-family: 'Changa One', sans-sefif;
        }
    </style>
</head>
<body>
    

    <h2>Types of Persistence</h2>
    <p>ကျွန်တော်တို့ရဲ့ own applications တွေအတွက် user နားလည်အောင် ပထဆုံးအနေနဲ့ data persistence နဲ့စရပါမယ်။ HTTP ဆိုတဲ့ internet ပေါ်က data ကို exchange လုပ်ဖို့အတွက်သုံးတဲ့ protocol ဟာ stateless protocol တစ်ခုပဲဖြစ်ပါတယ်။ ဒါဟာ ဘာကိုဆိုလိုသလဲဆိုရင် web servers တွေက site ပေါ်က page တစ်ခုချင်းစီကို ဘယ်သူတွေ visiting လုပ်သွားတယ်ဆိုတာကို track လုပ်လို့မရပါဘူး။ Servers တွေဟာ visitors တွေ page တစ်ခုကနေတစ်ခု click လုပ်တာကိုလည်း track မလုပ်နိုင်ပါဘူး။ ဥပမာ ကျွန်တော်တို့က site တစ်ခုက welcome page ကို visit လုပ်ပြီး contact page ကို visit ဆက်လုပ်မယ်ဆိုရင် server က အဲ့ဒီ process ကို track လုပ်ပေးမှာမဟုတ်ဘဲ ကျွန်တော်တို့က welcome page မှာရှိနေတယ်လို့လည်း သိမှာမဟုတ်ပါဘူး။ အဲ့ဒီမှာဆိုရင် persistent data နဲ့အလုပ်လုပ်ဖို့အတွက် options အမျိုးမျိုးရှိပါတယ်။ ကျွန်တော်တို့က database တစ်ခု (သို့) ဘယ် file-base data storage နဲ့မဆို အလုပ်လုပ်မယ်ဆိုရင် persistent data နဲ့ အရင်အလုပ်လုပ်ထားဖို့လိုပါတယ်။ Multiple pages တွေဟာ အဲ့ဒီ same information တွေကို access & know လုပ်နိုင်ပါတယ်။ အဲ့ဒီ persistance form ဟာ ကျွန်တော်တို့ data ကို long term store ဖို့လိုတဲ့အခါ or multiple user က utilize လုပ်တဲ့အခါ ကောင်းကောင်းအလုပ်လုပ်ပေးပါတယ်။ ကျွန်တော်တို့ဟာ user ရဲ့ browser မှာ တိကျတဲ့ information တွေကိုပါ track လုပ်နိုင်ပါတယ်။ </p>
    <hr>


    <h2>Using Form for Persistence</h2>
    <p>Browser ရဲ့ type ကို အခြေခံထားတဲ့ persistence အများစုဟာ forms တွေကလာတာပဲဖြစ်ပါတယ်။ Forms တွေဟာ page တစ်ခုကနေ နောက်pageတစ်ခုကို information တွေ share လုပ်ဖို့အတွက် ခွင့်ပြုပေးပါတယ်။ သူတို့ဟာ application ကနေ utilized လုပ်နိုင်တဲ့ user input တွေကိုလည်း capture လုပ်ဖို့ပါ ခွင့်ပြုပေးပါတယ်။ ဒါဟာ ကျွန်တော်တို့ content ကို နောက်တစ် page မှာ change လုပ်ဖို့ (သို့) sending an email လိုမျိုး server ပေါ်မှာ action အချို့ဆောင်ရွက်ဖို့အတွက် တစ်ကယ်ကိုကောင်းမွန်ပါတယ်။ Benefit အနေနဲ့ form တစ်ခုမှာ get method ကိုသုံးတဲ့အချိန်မှာ constructed URL က ကျွန်တော်တို့ကို အဲ့ဒီ results တွေကိုအခြားအရာတွေဖြစ်တဲ့ persisting data over multiple users တွေနဲ့ share လုပ်ဖို့ခွင့်ပြုပါတယ်။ ကျွန်တော်တို့ project မှာ user input တွေလက်ခံဖို့အတွက် forms တွေကိုအသုံးပြုမှာဖြစ်ပြီး ဘယ် word က requested ဖြစ်သင့်တယ်ဆိုတာကို ကျွန်တော်တို့ game ကို ပြောပြပေးမှာဖြစ်ပါတယ်။ post ဟာ users တွေမတော်တဆ things တွေကို ပြုလုပ်ခြင်းဖြင့် ဖြစ်လာတဲ့အရာတွေကို page refresh လုပ်တဲ့အချိန် warning တွေပြခြင်းဖြင့် prevent လုပ်ပေးပါတယ်။ post ဟာ ပိုပြီးတော့ secure ဖြစ်ပြီး အထူးသဖြင့် secure certificate တစ်ခုနဲ့ combine လုပ်တဲ့အခါ values တွေက browser history မှာ store မလုပ်နိုင်တာကြောင့်ပဲ ဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ URL တစ်ခုထဲမှာ passwords တွေကို ထည့်မထားချင်ပါဘူး။ နောက်ထပ်ကျွန်တာတစ်ခုကတော့ အချို့ browsers တွေက maximum path link ကို over 2, 000 characters ပဲ enforce လုပ်ပေးထားပါတယ်။ ဒါပေမယ့် get method ကိုသုံးမယ်ဆိုရင် အဲ့ဒီ limit ကို ရောက်ဖို့ ပိုလွယ်ပါတယ်။ Long paths to files, long field names, many field names or large amount of user input တွေကိုတောင် warning မပြပဲ accept လုပ်ပေးနိုင်ပါတယ်။ Good news ကတော့ URL parameter ကို posted form တစ်ခုနဲ့ pass လုပ်ပေးနိုင်ပါတယ်။ </p>
    <p>Example of header.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;!DOCTYPE html&gt;
                &lt;html lang="en"&gt;

                &lt;head&gt;
                &lt;meta charset="UTF-8"&gt;
                &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                &lt;title&gt;Header&lt;/title&gt;
                &lt;link rel="stylesheet" href="../css/index.css"&gt;
                &lt;link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"&gt;
                &lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"&gt;
                &lt;style&gt;
                *{
                font-family: 'Oswald', sans-serif;
                }
                &lt;/style&gt;
                &lt;/head&gt;
                &lt;body&gt;
                &lt;div class="container text-center pt-4"&gt;
        </code>
    </pre>
    <p>Example of play.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $total = 5;
            $page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);

            if (empty($page)) {
                $page = 1;
            }

            if ($page > $total) {
                header('location: story.php');
                exit;
            }

            include ('inc/header.php');

            echo '&lt;div class="row"&gt;';
            echo '&lt;div class="col-lg-6 offset-lg-3 text-center"&gt;';
            echo "&lt;h1&gt;Step $page of $total&lt;/h1&gt;";
            echo '&lt;form action="play.php?p=' . ($page + 1) . '" method="post"&gt;';
            echo '&lt;div class="form group form-group-lg"&gt;';
                switch ($page) {
                    case 2:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a name&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control mb-3" id="word" name="word" placeholder="Name"&gt;';
                        break;
                    
                    case 3:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a verb ending in- ing&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control" id="word" name="word" placeholder="Verb-ing"&gt;';
                        echo '&lt;span class="d-block pb-3"&gt;An verb is a word used to describe an action, state, or occurence.&lt;/span&gt;';
                        break;
                    
                    case 4:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a verb&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control" id="word" name="word" placeholder="verb"&gt;';
                        echo '&lt;span class="d-block pb-3"&gt;An verb is a word used to describe an action, state, or occurence.&lt;/span&gt;';
                        break;
                    
                    case 5:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a noun&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control" id="word" name="word" placeholder="noun"&gt;';
                        echo '&lt;span class="d-block pb-3"&gt;An noun is a word(other than a pronoun) used to identify any of a class of people, places, or things.&lt;/span&gt;';
                        break;
                    
                    default:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a adjective&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control" id="word" name="word" placeholder="Adjective"&gt;';
                        echo '&lt;span class="d-block pb-3"&gt;An adjective is a word or phrase naming an attribute, added to a noun to modify or describe it.&lt;/span&gt;';
                        break;
                }
                echo '&lt;input type="submit" value="Submit" class="btn btn-outline-secondary btn-lg"&gt;';
            echo '&lt;/div&gt;';     
            
            echo '&lt;/div&gt;';
            echo '&lt;/div&gt;';
            
            include ('inc/footer.php');
        </code>
    </pre>
    <hr>


    <h2>Reading, Writing and Destroying Session</h2>
    <p>Session တစ်ခုဆိုတာ website တစ်ခုကို browsing လုပ်တဲ့ user တစ်ယောက်ရဲ့ time ကို ဆိုလိုတာပါ။ ဆိုလိုချင်တာကတော့ user ရဲ့ first page ကို ဝင်ကြည့်လို့မပြီးမချင်း ကြာတဲ့အချိန်ပဲဖြစ်ပါတယ်။ ဒါဟာ user တစ်ယောက်က site တစ်ခုကို ဝင်ကြည့်လို့ပြီးမပြီး သိဖို့ဆိုတာ မဖြစ်နိုင်ပါဘူး။ အဲ့ဒီအစား ကျွန်တော်တို့က session ကို နည်းလမ်းနှစ်ခုထဲက တစ်ခုနဲ့ terminate လုပ်လို့ရပါတယ်။ User က browser ကို close ပဲလုပ်လုပ် (သို့) request တစ်ခုက time တစ်ခုအတွင်း မပြုလုပ်နိုင်တဲ့အခါ session က time out ဖြစ်သွားပါတယ်။ Default အနေနဲ့ PHP session တစ်ခုကို timeout အနေနဲ့ 1440 seconds (24 minutes) ပြီးမှ set လုပ်ပါတယ်။ PHP ဟာ user's session တစ်ခုရဲ့ duration အတွက်ရနိုင်တဲ့ variables တွေကို offer လုပ်ထားပါတယ်။ အဲ့ဒါတွေကို session variables တွေလို့ခေါ်ပါတယ်။ ကျွန်တော်တို့ရဲ့ workspaces ထဲကိုသွားပြီး user input ကို အခြေခံတဲ့ session variables အချို့ကို set လုပ်ပါမယ်။ Sessions တွေကို access လုပ်ဖို့အတွက် ကျွန်တော်တို့က session_start() ကိုသုံးရပါမယ်။ အဲ့ဒါကို ကျွန်တော်တို့က browser ဆီကို output မပြခင် call လုပ်သင့်ပါတယ်။ ဒါကြောင့် session_start ကို file ရဲ့ top မှာထားရခြင်းဖြစ်ပါတယ်။ Session ကိုပြန်ပီးတော့ remove လုပ်ချင်ရင် ကျွန်တော်တို့က unset ကိုသုံးရမှာဖြစ်ပါတယ်။ Session variable အကုန်လုံးကို တစ်ခါတည်းဖျက်ချင်ရင်တော့ session_destroy ကိုသုံးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of play.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            session_start()
            $total = 5;
            $page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);

            if (empty($page)) {
                //$_SESSION['word'][1] = '';
                //unset($_SESSION['word'][2]);
                session_destroy(); 
                $page = 1;
            }

            if (isset($_POST['word'])) {
                $_SESSION['word'][$page-1] = filter_input(INPUT_POST, 'word',FILTER_SANITIZE_STRING);
                //var_dump($_SESSION);
            }

            if ($page > $total) {
                header('location: story.php');
                exit;
            }

            include ('inc/header.php');

            echo '&lt;div class="row"&gt;';
            echo '&lt;div class="col-lg-6 offset-lg-3 text-center"&gt;';
            echo "&lt;h1&gt;Step $page of $total&lt;/h1&gt;";
            echo '&lt;form action="play.php?p=' . ($page + 1) . '" method="post"&gt;';
            echo '&lt;div class="form group form-group-lg"&gt;';
                switch ($page) {
                    case 2:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a name&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control mb-3" id="word" name="word" placeholder="Name"&gt;';
                        break;
                    
                    case 3:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a verb ending in- ing&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control" id="word" name="word" placeholder="Verb-ing"&gt;';
                        echo '&lt;span class="d-block pb-3"&gt;An verb is a word used to describe an action, state, or occurence.&lt;/span&gt;';
                        break;
                    
                    case 4:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a verb&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control" id="word" name="word" placeholder="verb"&gt;';
                        echo '&lt;span class="d-block pb-3"&gt;An verb is a word used to describe an action, state, or occurence.&lt;/span&gt;';
                        break;
                    
                    case 5:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a noun&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control" id="word" name="word" placeholder="noun"&gt;';
                        echo '&lt;span class="d-block pb-3"&gt;An noun is a word(other than a pronoun) used to identify any of a class of people, places, or things.&lt;/span&gt;';
                        break;
                    
                    default:
                        echo '&lt;label for="word" class="control-label h3"&gt;Enter a adjective&lt;/label&gt;';
                        echo '&lt;input type="text" class="form-control" id="word" name="word" placeholder="Adjective"&gt;';
                        echo '&lt;span class="d-block pb-3"&gt;An adjective is a word or phrase naming an attribute, added to a noun to modify or describe it.&lt;/span&gt;';
                        break;
                }
                echo '&lt;input type="submit" value="Submit" class="btn btn-outline-secondary btn-lg"&gt;';
            echo '&lt;/div&gt;';     
            
            echo '&lt;/div&gt;';
            echo '&lt;/div&gt;';
            
            include ('inc/footer.php');
        </code>
    </pre>
    <p>Example of story.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            session_start();
            $word1 = htmlspecialchars($_SESSION['word'][1]);
            $word2 = htmlspecialchars($_SESSION['word'][2]);
            $word3 = htmlspecialchars($_SESSION['word'][3]);
            $word4 = htmlspecialchars($_SESSION['word'][4]);
            $word5 = htmlspecialchars($_SESSION['word'][5]);
            include ('inc/header.php');
            ?&gt;
                &lt;div class="row"&gt;
                    &lt;div class="offset-lg-3 col-lg-6 text-center"&gt;
                        &lt;h1&gt;My Itvision Story&lt;/h1&gt;
                        &lt;p class="mb-1"&gt;There was once a(n) &lt;?php echo $word1; ?&gt; programmer named &lt;?php echo $word2; ?&gt;.&lt;/p&gt;
                        &lt;p&gt;This &lt;?php echo $word3; ?&gt; programmer used Itvision to learn to &lt;?php echo $word4; ?&gt; the &lt;?php echo $word5; ?&gt;.&lt;/p&gt;
                        &lt;a href="inc/cookie.php?save" class="btn btn-outline-secondary btn-lg"&gt;Save Story&lt;/a&gt;
                        &lt;a href="play.php" class="btn btn-outline-secondary btn-lg"&gt;Play Again&lt;/a&gt;
                        &lt;a href="index.php" class="btn btn-outline-secondary btn-lg"&gt;Other Stories&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;?php
            include ('inc/footer.php');
        </code>
    </pre>
    <hr>


    <h2>Writing Cookies</h2>
    <p>Sessions တွေဟာ site တစ်လျှောက်လုံးမှာရရှိနိုင်တဲ့ required variables တွေကို keep လုပ်ဖို့အတွက် လွယ်ကူတဲ့ နည်းလမ်းတစ်ခုကို provide လုပ်ပေးပါတယ်။ Main features တွေထဲက တစ်ခုနဲ့ limitations of sessions တွေဟာ current user session အတွက်သာလျှင် available ဖြစ်တာဖြစ်ပါတယ်။ သူတို့ဟာ browser က close ဖြစ်သွားတာနဲ့ terminate ဖြစ်သွားတယ် (သို့) no activity နဲ့ အချန်တစ်ခုပြီးသွားတဲ့နောက်မှာ terminate ဖြစ်သွားပါတယ်။ ဒါကိုကျွန်တော်တို့က အချို့သော information တွေကို longer period of time တစ်ခုမှာ ရနိုင်သလောက် သိမ်းထားချင်တာပါ။ Location အတွက် zip code preference တစ်ခုကို storing လုပ်ခြင်းဟာ searches (သို့) shipping ကို calculate လုပ်ဖို့ရန်အတွက် အခြေခံထားတာဖြစ်ပါတယ်။ Shopping cart data ကို လူတွေ login မဝင်ခင်မှာ သူတို့ cart data တွေကို store လုပ်ပေးထားတာတို့ဆိုရင် ကျွန်တော်တို့က user session အတွက် data persistent ကို keep လုပ်ပေးဖို့လိုပါတယ်။ အဲ့လိုလုပ်ဖို့ ကျွန်တော်တို့က cookies ကိုအသုံးပြုနိုင်ပါတယ်။ ကျွန်တော်တို့ရဲ့ information တွေကို user's session တစ်ခုထက်ပိုပြီး အကြာကြီးရှိနေစေချင်တဲ့အခါ cookies တွေကို အသုံးပြုရမှာဖြစ်ပါတယ်။ Cookie တစ်ခုဆိုတာ website တစ်ခုကနေ ပို့လိုက်တဲ့ data အစိတ်အပိုင်းတစ်ခုဖြစ်ပြီး user ရဲ့ web browser ကနေ users တွေရဲ့ computer ထဲမှာ stored လုပ်ပေးတဲ့ အရာပဲဖြစ်ပါတယ်။ အခု PHP မှာ cookies တွေကို ဘယ်လို access လုပ်လဲဆိုတာ story တစ်ခုကို save လုပ်တာကို add လုပ်ခြင်းဖြင့် လေ့လာသွားပါမယ်။ Cookie တစ်ခုကို save လုပ်ချင်တဲ့အခါ ပထမဆုံးကျွန်တော်တို့က unique name တစ်ခုပေးဖို့ လိုအပ်ပါတယ်။ ဒီလိုမဟုတ်ဘဲ name တွေက unique မဖြစ်ဘူးဆိုရင်တော့ ရှိပြီးသား cookies တွေပေါ်ကို overwrite လုပ်သွားမှာဖြစ်ပါတယ်။ Cookie တစ်ခုကို set လုပ်ဖို့ ကျွန်တော်တို့က setcookie() ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ Parenthesis ထဲက ပထမဆုံး parameter ကတော့ name ဖြစ်ပြီး ၊ ဒုတိယ parameter ကတော့ value ပဲဖြစ်ပြီး သူ့ကို string တစ်ခုအနေနဲ့ store လုပ်ထားရမှာဖြစ်ပါတယ်။ အဲ့ဒါကတော့ array တစ်ခုရဲ့ serialized version တစ်ခု (သို့) JSON object (သို့) array တစ်ခု or object တစ်ခုရဲ့ ဘယ် string representation မဆိုဖြစ်နိုင်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ cookie တစ်ခုကို array တစ်ခုအဖြစ် ကျွန်တော်တို့ရဲ့ name ရဲ့နောက်မှာ square brackets ထည့်ခြင်းဖြင့် ပြောင်းလဲနိုင်ပါတယ်။ တတိယ parameter ကတော့ expiration time တစ်ခုဖြစ်ပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့က set မလုပ်ခဲ့ဘူးဆိုရင် session closed ဖြစ်သွားတဲ့အချိန်မှာ cookie က expire ဖြစ်သွားမှာဖြစ်ပါတယ်။ Fourth parameter ကတော့ cookie available ဖြစ်နိုင်မယ့် server ပေါ်မှာရှိတဲ့ path လမ်းကြောင်းပဲဖြစ်ပါတယ်။ Default အနေနဲ့ ကျွန်တော်တို့က current path ကိုသုံးထားတာဖြစ်ပြီး ဆိုလိုတာက cookie ဟာ inc folder အတွင်းမှာပဲ accessible ဖြစ်လိမ့်မယ်လို့ ပြောချင်တာပါ။ Fifth parameter ကတော့ domain ပဲဖြစ်ပါတယ်။ သူကတော့ ဘယ် domain ကို control လုပ်ရမလဲနဲ့  subdomains တွေက cookie ကို ဘယ်လို access လုပ်နိုင်မလဲဆိုတာဖြစ်ပါတယ်။ Sixth parameter ကတော့ ကျွန်တော်တို့ကို secure connection တစ်ခုပေါ်မှာသာလျှင် available ဖြစ်နိုင်မယ့် cookie တစ်ခု set လုပ်ဖို့ ခွင့်ပြုပေးမှာဖြစ်ပါတယ်။ Seventh နဲ့ final parameter ကတော့ cookie ကို HTTP only မှာသာလျှင် set လုပ်ဖို့ ခွင့်ပြုပေးမှာဖြစ်ပါတယ်။ ဆိုလိုတာကတော့ cookie ဟာ JavaScript လိုမျိုး scripting languages တွေကို accessible မလုပ်ပါဘူးလို့ ဆိုလိုတာပါ။ </p>
    <p>Example of cookie.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            session_start();

            if (isset($_GET['save'])) {
                $name = urlencode($_SESSION['word'][2]). time();
                setcookie($name, implode(':', $_SESSION['word']), strtotime('+30 days'), '/');
                header('location: /index.php');
                exit;  // Go stroy.php and update the link to save the story " echo '&lt;a class="btn btn-default btn-lg" href="inc/cookie.php?save" role="button">Save Story</a>'; "      
            }
        </code>
    </pre>
    <hr>


    <h2>Reading and Deleting Cookies</h2>
    <p>ကျွန်တော်တို့ရဲ့ cookie ကို save လုပ်ပြီးတဲ့နောက် cookie ကို read လုပ်ပြီး welcome page ပေါ်မှာ name ကို ဖော်ပြမှာဖြစ်ပါတယ်။ Cookie variable ဟာ session variable တွေလို အလုပ်လုပ်ပါတယ်။ ကျွန်တော်တို့ အသုံးပြုချင်တဲ့ key ကို specify လုပ်ချင်တယ်ဆိုရင်တော့ array_combine() ကိုအသုံးပြုရမှာဖြစ်ပြီး parenthesis ထဲက ပထမ parameter ကတော့ keys ပဲဖြစ်ပြီး ဒုတိယ parameter ကတော့ values တွေပဲဖြစ်ပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ keys တွေကို arrange လုပ်ဖို့အတွက်ဆိုရင်တော့ range( ) ဆိုတဲ့ function ကိုအသုံးပြုပေးရပါတယ်။ rage( ) နောက်က parenthesis ထဲမှာတော့ သတ်မှတ်ချင်တဲ့ range ကို number နဲ့ comma ခြားပြီး ရေးပေးရပါမယ်။ Eg. range(1, 5) ။ ပြီးရင် browser ကို တစ်ချက် run ကြည့်တဲ့အခါ သူဟာ cookie ရဲ့ contents တွေကို read လုပ်ပေးသွားပြီး session variables တွေကို set လုပ်သွားပါတယ်။ ကျွန်တော်တို့ နောက်ထပ်ထည့်သင့်တဲ့အရာတစ်ခုကတော့ cookie တစ်ခုကို delete လုပ်ဖို့အတွက်ပဲဖြစ်ပါတယ်။ Cookie တစ်ခုကို delete လုပ်ဖို့အတွက်ဆိုရင် ကျွန်တော်တို့က နောင်တစ်ချိန်မှာ expire ဖြစ်မယ့် empty string တစ်ခု cookie ထဲကို set လုပ်ပေးရပါမယ်။ နောက်ပြီးတော့ ဘယ်အချိန်မှာ delete လုပ်ပါမယ်ဆိုပြီးတော့လည်း time( ) ဆိုတဲ့ function ကိုသုံးပြီး သတ်မှတ်ပေးလို့ရပါတယ်။ အဲ့ဒါပြီးတဲ့နောက်မှာတော့ root path ကို comma ခံပြီးရေးပေးရမှာဖြစ်ပြီး code ကို အောက်က example မှာ ကြည့်ရှုနိုင်ပါတယ်။ </p>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            include 'inc/header.php';

            echo '&lt;h1&gt;Welcome to our &lt;br /&gt; Treehouse Story Game&lt;/h1&gt;';
            echo '&lt;p&gt;Enter the requested words and create your story.&lt;/p&gt;';
            echo '&lt;p&gt;&lt;a class="btn btn-default btn-lg" href="play.php" role="button"&gt;Play&lt;/a&gt;&lt;/p&gt;';

            echo '&lt;h2&gt;Reread Your Saved Stories&lt;/h2&gt;';
            if (isset($_COOKIE)) {
                foreach ($_COOKIE as $key => $value) {
                    if ($key != 'PHPSESSID') {
                        echo '&lt;div class="form-group"&gt;';
                        echo '&lt;a class="btn btn-info" href="inc/cookie.php?read=' . urlencode($key) . '"&gt;';
                        echo substr($key, 0 , -10);
                        echo ' ';
                        echo date('d M Y H:i:s', (int) substr($key, -10));
                        echo '&lt;/a&gt;';
                        echo '&lt;a class="btn btn-danger" href="inc/cookie.php?delete=' . urlencode($key) . '"&gt;';
                        echo substr($key, 0 , -10);
                        echo 'X&lt;/a&gt;';
                        echo '&lt;/div&gt;';
                    }
                }
            }

            include 'inc/footer.php';
        </code>
    </pre>
    <p>Example of cookie.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            session_start();

            if (isset($_GET['save'])) {
                $name = urlencode($_SESSION['word'][2]) . time();
                setcookie($name, implode(':', $_SESSION['word']), strtotime('+30 days'), '/');
            } elseif (isset($_GET['read'])) {
                $_SESSION['word'] = array_combine(range(1, 5), explode(':', $_COOKIE[$_GET['read']]));
                header('location: /story.php');
                exit;
            } elseif (isset($_GET['delete'])) {
                setcookie($_GET['delete'], '', time() - 3600, '/');
            }
            header('location: /index.php');
            exit;
        </code>
    </pre>
    <p>For Example:</p>
    <p>
        <a href="index.php" target="_blank" class="output">The result of above code:</a>
    </p>
    <hr>


</body>
</html>
