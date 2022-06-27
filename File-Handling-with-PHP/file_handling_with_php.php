<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling with PHP</title>
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
            font-family: 'Changa One', sans-serif;
        }
    </style>
</head>
<body>
    

    <h2>Directory and File Structures</h2>
    <p>ဒီတစ်ခါမှာ ကျွန်တော်တို့က file system နဲ့ပတ်သတ်တဲ့ knowledge အချို့ကို လေ့လာသွားမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ computer တစ်ခုပေါ်မှာဆိုရင် store လုပ်ထားတဲ့ file တွေအများကြီးရှိပါတယ်။ အဲ့ဒီ files တွေကို ဘယ်လို read လုပ်ရမလဲနဲ့ manipulate လုပ်ရမလဲဆိုတာ သိထားခြင်းဟာ controlling file system အတွက် တစ်ကယ်ကို powerful ဖြစ်တဲ့ tool ဖြစ်လာမှာဖြစ်ပါတယ်။ File handling လုပ်ခြင်းကတော့ ကျွန်တော်တို့ application တစ်ခုတည်ဆောက်ပြီဆိုရင် အရေးပါတဲ့ အစိတ်အပိုင်းတစ်ခုအနေနဲ့ ပါဝင်ပါတယ်။ ကျွန်တော်တို့ဟာ reading & configuration လုပ်တာကဲ့သို့သော tasks အမျိုးမျိုးအတွက် file တစ်ခုကို open & process လုပ်ဖို့လိုအပ်ပါလိမ့်မယ်။ ကျွန်တော်တို့အနေနဲ့ exporting order details ကဲ့သို့ files တွေကိုတောင် ရေးဖို့လိုအပ်လာပါလိမ့်မယ်။ ဒီသင်ခန်းစာမှာတော့ files တွေဘယ်နေရာမှာရှိလဲဆိုတာကို read လုပ်ဖို့အတွက် file structure ကို သူကိုယ်တိုင် explore လုပ်တာကို လေ့လာသွားမှာဖြစ်ပါတယ်။ အဲ့ဒီမှာ files တွေကို read & write လုပ်တဲ့အခါ တွေ့ရလေ့ရှိတဲ့ biggest issue ကတော့ permissions ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ example ထဲက scandir() ဆိုတဲ့ function ကတော့ directory ကို scan လုပ်ပေးတာဖြစ်ပြီး files တွေနဲ့ directories တွေကို array တစ်ခုအနေနဲ့ return ပြန်ပေးပါတယ်။ Browser ကို run ကြည့်တဲ့အခါတွေ့ရတဲ့ single dot (.) ဟာ current directory ကို ရည်ညွှန်းပြီး ၊ double dot (..) ကတော့ one level ကို သွားဖို့အတွက် path ကို ရည်ညွှန်းပါတယ်။ အဲ့ဒီမှာဆိုရင် .DS_Store file ဟာ hidden mac file တစ်ခုဖြစ်ပြီး အခြားဘယ် hidden files တွေကိုမဆို dot (.) နဲ့စရေးနိုင်ပါတယ်။ </p>
    <p>Example of countries.html File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;option value="AX"&gt;Aland Islands&lt;/option&gt;
            &lt;option value="AF"&gt;Afghanistan&lt;/option&gt;
            &lt;option value="AL"&gt;Albania&lt;/option&gt;
            &lt;option value="DZ"&gt;Algeria&lt;/option&gt;
            &lt;option value="AS"&gt;American Samoa&lt;/option&gt;
            &lt;option value="AD"&gt;Andorra&lt;/option&gt;
            &lt;option value="AO"&gt;Angola&lt;/option&gt;
            &lt;option value="AI"&gt;Anguilla&lt;/option&gt;
            &lt;option value="AQ"&gt;Antarctica&lt;/option&gt;
            &lt;option value="AG"&gt;Antigua and Barbuda&lt;/option&gt;
            &lt;option value="BS"&gt;Bahamas&lt;/option&gt;
            &lt;option value="BH"&gt;Bahrain&lt;/option&gt;
            &lt;option value="BD"&gt;Bangladeeh&lt;/option&gt;
            &lt;option value="BB"&gt;Barbados&lt;/option&gt;
            &lt;option value="BY"&gt;Belarus&lt;/option&gt;
            &lt;option value="BE"&gt;Belgium&lt;/option&gt;
            &lt;option value="BZ"&gt;Belize&lt;/option&gt;
            &lt;option value="BJ"&gt;Benin&lt;/option&gt;
            &lt;option value="BM"&gt;Bhutan&lt;/option&gt;
            &lt;option value="BT"&gt;Bolivia&lt;/option&gt;
            &lt;option value="IO"&gt;British Idian Ocean&lt;/option&gt;
            &lt;option value="CV"&gt;Cabo Verde&lt;/option&gt;
            &lt;option value="KH"&gt;Cambodia&lt;/option&gt;
            &lt;option value="CM"&gt;Cameros&lt;/option&gt;
            &lt;option value="CA"&gt;Canada&lt;/option&gt;
            &lt;option value="KY"&gt;Cayman Islands&lt;/option&gt;
            &lt;option value="CF"&gt;Central African Republic&lt;/option&gt;
            &lt;option value="MY"&gt;Myanmar&lt;/option&gt;
            &lt;option value="OS"&gt;Ocean road&lt;/option&gt;
            &lt;option value="OH"&gt;Ohaiyo&lt;/option&gt;
        </code>
    </pre>
    <p>Example of index.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            function readFolderFiles($dir) {
                $files = scandir($dir);
            
                echo '&lt;ul&gt;';
                foreach ($files as $file) {
                    if (substr($file, 0, 1) != '.') {
                        echo '&lt;li&gt;';
                        if (is_dir($dir . '/' . $file)) {
                            echo $file;
                            readFolderFiles($dir . '/' . $file);
                        } else {
                            echo '&lt;a href="' . $dir . '/' . $file . '"&gt;' . $file . '&lt;/a&gt;'; 
                        }
                        echo '&lt;/li&gt;';
                    }
                }
                echo '&lt;/ul&gt;';
            }

            readFolderFiles('data');

            ?&gt;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/directory.png" alt="Directory and File Structures Image">
    </div>
    <hr>


    <h2>Including and Opening Files</h2>
    <p>ကျွန်တော်တို့အသုံးပြုခဲ့တဲ့ include နဲ့ require statements တွေဟာ လက်ရှိ current file ထဲကို additional files တွေ ထပ်ပြီး read လုပ်တာဖြစ်ပါတယ်။ ဒီလိုအသုံးပြုတာဟာ တူညီတဲ့ code တွေကို rewrite မလုပ်ချင်တဲ့အတွက် file သပ်သပ်ဆောက်ပြီး ပြန်ခေါ်သုံးတာဖြစ်ပါတယ်။ PHP မှာရှိတဲ့ fopen() ဆိုတဲ့ function ဟာ file တစ်ခုမှာ connection တစ်ခုကို open လုပ်ပေးပြီး ကျွန်တော်တို့ အခြား file နဲ့ connect လုပ်နိုင်တဲ့ file handler တစ်ခုကို return ပြန်ပေးပါတယ်။ ဒါဟာ အရင်ကကျွန်တော်တို့လေ့လာခဲ့တဲ့ database တစ်ခုနဲ့ connection တစ်ခု setup လုပ်တဲ့အချိန်မှာ အသုံးပြုတာနဲ့ ဆင်တူပါတယ်။ Connection တစ်ခုကို open လုပ်ဖို့ အရင်ဆုံး ဘယ် file ကို open လုပ်ချင်ပါတယ်ဆိုတာကို ပြောရပါတယ်။ ပြီးတော့မှ ဘယ် mode ကိုအသုံးပြုချင်ပါတယ်ဆိုတာ ပြောပေးရတာဖြစ်ပါတယ်။ အဲ့ဒါတွေကတော့ reading, writing, appending (သို့) file မရှိရင် file ကို create လုပ်တာမျိုးတွေပါ။ ဥပမာထဲမှာ file ကို read လုပ်ချင်တဲ့အတွက် mode အဖြစ် r လို့ထားလိုက်တာဖြစ်ပါတယ်။ File ကို close လုပ်ချင်တဲ့တော့ fclose() function ကို အသုံးပြုပါတယ်။ Line တစ်ခုချင်းစီကို read လုပ်ဖို့ဆိုရင်တော့ fgets() ဆိုတဲ့ function ကို အသုံးပြုနိုင်ပါတယ်။ သူ့ဟာ current line ကို string တစ်ခုအဖြစ် return ပြန်ပေးပြီး ၊ pointer ကို next line သို့ move လုပ်ပေးပါတယ်။ String ရဲ့ position ကို သတ်မှတ်ချင်ရင် strpos() function ကို အသုံးပြုရပြီး string ကို replace လုပ်ချင်ရင်တော့ str_replace() function ကို အသုံးပြုရတာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;form&gt;
                &lt;label for="country"&gt;Country&lt;/label&gt;
                &lt;select name="country" id="country"&gt;
                    &lt;?php include 'data/html/countries.html'; ?&gt;
                &lt;/select&gt;

                &lt;label for="state"&gt;State&lt;/label&gt;
                &lt;select name="state" id="state"&gt;
                    &lt;?php
                    if ($fh = fopen('data/html/states.html', 'r')) {
                        while (!feof($fh)) {
                            $line = fgets($fh);
                            if (strpos($line, 'Myanmar')) {
                                echo str_replace('>Myanmar', ' selected>Myanmar', $line);
                            } else {
                                echo $line;
                            }
                        }
                        fclose($fh);
                    }
                    ?&gt;
                &lt;/select&gt;
            &lt;/form&gt;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/opening-file.png" alt="Including and Opening Files Image">
    </div>
    <hr>


    <h2>Reading Files into a String or Array</h2>
    <p>ကျွန်တော်တို့အနေနဲ့ entire file တစ်ခုလုံးကို single string တစ်ခုအဖြစ် အလုပ်လုပ်ချင်တယ်ဆိုရင် file_get_contents() ဆိုတဲ့ function တစ်ခုကို အသုံးပြုနိုင်ပါတယ်။ အဲ့ဒီ function ထဲမှာတော့ file path လမ်းကြောင်းကို ထည့်ပေးရမှာဖြစ်ပါတယ်။ အောက်မှာပြထားတဲ့ basic ways သုံးခုကတော့ ကျွန်တော်တို့ system ပေါ်မှာ file တစ်ခုနဲ့ ဘယ်လို interact လုပ်သလဲဆိုတာ ပြပေးတာပဲဖြစ်ပါတယ်။ အဲ့ဒီ နည်းလမ်းသုံးခုထဲက ပထမတစ်ခုကတော့ file တစ်ခုထဲမှာ connection တစ်ခုကို open လုပ်ပြီး သူ့ကို close မလုပ်ခင်မှာပဲ line-by-line အရ handle လုပ်တာဖြစ်ပါတယ်။ ဒုတိယနည်းလမ်းကတော့ entire file တစ်ခုလုံးကို string တစ်ခုအနေနဲ့ အလုပ်လုပ်တာဖြစ်ပြီး ၊ နောက်ဆုံးနည်းလမ်းတစ်ခုကတော့ entire file တစ်ခုလုံးကို object (သို့) array တစ်ခုအနေနဲ့ အလုပ်လုပ်တာတို့ပဲ ဖြစ်ပါတယ်။ </p>
    <p>Example of territories.html File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;option value="AS"&gt;American Samoa&lt;/option&gt;
            &lt;option value="GU"&gt;Guam&lt;/option&gt;
            &lt;option value="NM"&gt;Nothern Mariana Islands&lt;/option&gt;
            &lt;option value="PR"&gt;Puerto Rico&lt;/option&gt;
            &lt;option value="US"&gt;Uinted States Minor Outlying Islands&lt;/option&gt;
            &lt;option value="VI"&gt;Virgin Islands&lt;/option&gt;
        </code>
    </pre>
    <p>Example of armed_force.html File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;option value="US"&gt;Americas&lt;/option&gt;
            &lt;option value="PF"&gt;Pacific&lt;/option&gt;
            &lt;option value="OT"&gt;Others&lt;/option&gt;
        </code>
    </pre>
    <p>Example of state_form.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;form&gt;
                &lt;label for="country"&gt;Country&lt;/label&gt;
                &lt;select name="country" id="country"&gt;
                    &lt;?php include 'data/html/countries.html'; ?&gt;
                &lt;/select&gt;

                &lt;!-- Open a connection to the file and handle it line_by_line before closing it --&gt;
                &lt;label for="state"&gt;State&lt;/label&gt;
                &lt;select name="state" id="state"&gt;
                    &lt;?php
                    if ($fh = fopen('data/html/states.html', 'r')) {
                        while (!feof($fh)) {
                            $line = fgets($fh);
                            if (strpos($line, 'Myanmar')) {
                                echo str_replace('>Myanmar', ' selected>Myanmar', $line);
                            } else {
                                echo $line;
                            }
                        }
                        fclose($fh);
                    }
                    // Working with the entire file as a string  
                    echo '&lt;optgroup label="US Outlying Territories"&gt;';
                    $states = file_get_contents('data/html/territories.html');
                    echo strtolower($states);
                    echo '&lt;/optgroup&gt;';
                
                    echo '&lt;optgroup label="Armed Forces"&gt;';
                    $state_array = file('data/html/armed_forces.html');
                    foreach ($state_array as $line) {
                        echo str_replace('Armed Forces ', '' , $line);
                    }
                    ?&gt;
                &lt;/select&gt;
            &lt;/form&gt;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/read-as-string.png" alt="Reading Files into a String or Array Image">
    </div>
    <hr>


    <h2>Writing Files Line by Line</h2>
    <p>Files တွေကို reading လုပ်ခြင်းဟာ ကျွန်တော်တို့ကို manipulation လုပ်ထားတဲ့ data တွေကို retrieve လုပ်ဖို့ ခွင့်ပြုပေးပါတယ်။ ဒါပေမယ့် အဲ့ဒီ information တွေ အခြားကို ဘယ်လို share လုပ်မလဲဆိုတာ မေးစရာရှိလာပါတယ်။ Files တွေကို writing လုပ်ခြင်းကတော့ ကျွန်တော်တို့ လုပ်လိုက်တဲ့ changes တွေကို save လုပ်ဖို့ခွင့်ပြုပေးရုံသာမက settings တွေ change လုပ်ဖို့နဲ့ application details တွေကို update လုပ်ဖို့ပါ ခွင့်ပြုပေးပါတယ်။ ကျွန်တော်တို့က line by line ရေးဖို့အတွက် အရင်ဆုံး new file တစ်ခု open လုပ်ရပါမယ်။ fopen() function ကိုသုံးတဲ့အခါ write လုပ်မှာဖြစ်တဲ့အတွက် mode အတွက် 'w' လို့ရေးပေးရပါမယ်။ ဒါဟာ function ကို writing only နဲ့ပဲ file ကို open လုပ်မယ်လို့ပြောလိုက်တာပါ။ သူဟာ file pointer ကို file ရဲ့အစမှာ place လုပ်လိုက်ပြီး file ကို zero length ဖြစ်အောင် truncate လုပ်လိုက်တာဖြစ်ပါတယ်။ ဒါဟာ file ကို erasing လုပ်တဲ့ effect ရှိတဲ့အတွက် ကျွန်တော်တို့အနေနဲ့ ဂရုစိုက်ဖို့ လိုအပ်ပါတယ်။ တစ်ကယ်လို့ file က does not exit ဖြစ်နေရင် အဲ့ file ကို create လုပ်သွားမှာဖြစ်လို့ပဲ ဖြစ်ပါတယ်။ File ကို write လုပ်ဖို့အတွက် fwrite() function ကို အသုံးပြုပါတယ်။ fget() လိုပဲ fwrite() function ထဲမှာ ကျွန်တော်တို့သုံးမယ့် fopen statement ကို handler အဖြစ် pass လုပ်ပေးရပါမယ်။ ပြီးတော့မှ original states file နဲ့ စရေးချင်တဲ့အတွက် file_get_contents() function ကို သုံးပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ file ထဲမှာ line break ကို add လုပ်ဖို့အတွက် ကောင်းမွန်တဲ့နည်းလမ်းတစ်ခုကတော့ constant ကို predefined လုပ်ထားတဲ့ PHP_EOL ပဲဖြစ်ပါတယ်။ အဲ့ဟာက script running လုပ်နေတဲ့အချိန်မှာ platform အတွက် correct line of symbol ကို add လုပ်ပေးပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            if ($fh = fopen('data/html/combined.html', 'w')) {
                fwrite($fh, file_get_contents('data/html/states.html'));
            
                fwrite($fh, PHP_EOL.'&lt;optgroup label="US Outlying Territories"&gt;');
                fwrite($fh, PHP_EOL.file_get_contents('data/html/territories.html'));
                fwrite($fh, PHP_EOL.'&lt;/optgroup&gt;');

                fwrite($fh, PHP_EOL.'&lt;optgroup label="Armed Forces"&gt;');
                fwrite($fh, PHP_EOL.file_get_contents('data/html/armed_forces.html'));
                fwrite($fh, PHP_EOL.'&lt;/optgroup&gt;');
                fclose($fh);
            }

            echo '&lt;select&gt;';
            include 'data/html/combined.html';
            echo '&lt;/select&gt;';
        </code>
    </pre>
    <hr>


    <h2>Writing All Files at once</h2>
    <p>အခု ကျွန်တော်တို့က territories နဲ့ armed forces တွေကို alphabetical order အရစီပြီး list နဲ့ပြချင်တယ်ဆိုပါစို့။ အဲ့ဒီအတွက် အရင်ဆုံး combined_sort ဆိုတဲ့ file အသစ်တစ်ခုတည်ဆောက်ပါမယ်။ ပြီးရင်တော့ file ထဲမှာ options အားလုံးရဲ့ master array တစ်ခုတည်ဆောက်လိုက်ပါမယ်။ ကျွန်တော်တို့အသုံးပြုချင်တဲ့ files တွေတစ်ခုချင်းဆီကို merge လုပ်ဖို့အတွက် array_merge() function ကို အသုံးပြုရပါမယ်။ ပြီးရင်တော့ သူ့နောက်မှာ array တစ်ခုထဲမှာ separate item အဖြစ် line တစ်ကြောင်းချင်းစီ ဆွဲထုတ်ဖို့အတွက် file() function ကို အသုံးပြုပါမယ်။ file() function ထဲကို option တစ်ခု add လုပ်ပါမယ်။ အဲ့ဒါကတော့ new line characters တွေကို ignore လုပ်ပါမယ့်လို့ function ကိုပြောပေးမယ့် FILE_IGNORE_NEW_LINES ဆိုတဲ့ option ပဲဖြစ်ပါတယ်။ သူဟာ ကျွန်တော်တို့ elements တွေတစ်ခုချင်းစီရဲ့ new line characters တွေကို trim လုပ်သွားမှာဖြစ်ပါတယ်။ strcasecmp() ဆိုတဲ့ function ကတော့ binary safe case-insensitive string comparison တစ်ခုပဲဖြစ်ပါတယ်။ function ထဲက parenthesis ထဲမှာတော့ ကျွန်တော်တို့ compare လုပ်မယ့် value နှစ်ခုကို strip_tags() function နဲ့အသုံးပြုပါမယ်။ ဒါဟာ compare လုပ်ဖို့အတွက် display text ကို leave လုပ်လိုက်တာဖြစ်ပါတယ်။ ပြီးရင်တော့ user sort function or usort() function ကိုသုံးပြီး $states ဆိုတဲ့ array ကို pass လုပ်ပါမယ်။ သူ့နောက်မှာတော့ ကျွန်တော်တို့သုံးချင်တဲ့ function compareStrings() ကို pass လုပ်ပေးပါမယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ array က ready ဖြစ်သွားပြီး file ထဲကို directly write လုပ်ဖို့ file_put_contents() ဆိုတဲ့ function ကိုသုံးနိုင်ပါတယ်။ file_put_contents() ဟာ အရင်ကသုံးခဲ့သလို fopen ဆိုတဲ့ mode ကိုပဲ အသုံးပြုပါတယ်။ ပြီးရင်တော့ ကျွန်တော်တို့ array ကို string တစ်ခုအဖြစ် join လုပ်ဖို့ implode ကိုအသုံးပြုပါမယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $states = array_merge(
                file('data/html/states.html', FILE_IGNORE_NEW_LINES),
                file('data/html/territories.html', FILE_IGNORE_NEW_LINES),
                file('data/html/armed_forces.html', FILE_IGNORE_NEW_LINES)
            );

            function compareStrings($a, $b) {
                return strcasecmp(strip_tags($a), strip_tags($b));
            }

            usort($states, 'compareStrings');
            file_put_contents('data/html/sorted.html', implode(PHP_EOL, $states)); //combined.html
            echo '&lt;select&gt;';
            include 'data/html/sorted.html';
            echo '&lt;/select&gt;';

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Personal Recommendation Project</h2>
    <p>ကျွန်တော်တို့ဟာ SCV, JSON နဲ့ XML တွေအပါအဝင် data types အများစုကို စပြီး handling လုပ်လို့ရနေပါပြီ။ ကျွန်တော်တို့အသုံးပြုမယ့် functions တွေဟာလည်း ပြီးခဲ့တဲ့ သင်ခန်းစာကလို files တွေ reading & writing လုပ်သလိုပဲ အလုပ်လုပ်ပါလိမ့်မယ်။ မတူတာတစ်ခုကတော့ အဲ့ဒီ new functions တွေဟာ data files တွေထဲကို arrays နဲ့ objects တွေထဲမှာ parse လုပ်သွားမှာဖြစ်ပါတယ်။ အဲ့ဒါတွေကိုတော့ ကျွန်တော်တို့ code ထဲမှာထည့်ပြီး အသုံးပြုနိုင်ပါတယ်။ အခု example မှာ ကျွန်တော်တို့က Personal Recommendation Site တစ်ခုကို တည်ဆောက်သွားမှာဖြစ်ပါတယ်။ အရင်ဆုံး follow လုပ်ရမယ့် people တွေကို suggestion ပေးပြီး ဖော်ပြထားပါမယ်။ အဲ့ဒီနောက်မှာ JSON data ကို ကျွန်တော်တို့ အသုံးပြုမှာဖြစ်ပါတယ်။ နောက်ဆုံးမှာတော့ favorite podcast အချို့ကို XML data သုံးပြီး finish လုပ်ပါမယ်။ </p>
    <hr>


    <h2>Readig CSV File</h2>
    <p>CSV ဟာ data တွေကို databases & spreadsheets ထဲကို (သို့) ကနေ importing နဲ့ exporting လုပ်တဲ့နေရာမှာ အလွန် popular ဖြစ်တဲ့ format တစ်ခုဖြစ်ပါတယ်။ အဲ့ဒီ files တွေမှာ များသောအားဖြင့် header row တစ်ခုရှိပြီး သူ့အောက်မှာမှ comma နဲ့ separated လုပ်ထားတဲ့ column values တွေတစ်ခုချင်းစီပါတဲ့ multiple rows တွေရှိတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ CSV data ကို array တစ်ခုအဖြစ် read & write လုပ်လို့ရမယ့် PHP built-in functions တွေကို အသုံးပြုသွားမှာဖြစ်ပါတယ်။ people.php file ထဲမှာ ပထမဆုံးအနေနဲ့ reading လုပ်ဖို့အတွက် file တစ်ခုကို open လုပ်ရပါမယ်။ အဲ့ဒီ fopen() လုပ်ထားတဲ့ condition ထဲမှာ fgets အစား line တစ်ခုချင်းစီကို string တစ်ခုအဖြစ်ရရှိဖို့ fgetcsv() ဆိုတဲ့ function ကို အသုံးပြုသွားမှာဖြစ်ပြီး fgetcsv() ဟာ CSV file ထဲမှာ line တစ်ခုချင်းစီကို row of columns တစ်ခုအဖြစ် read လုပ်သွားမှာဖြစ်ပါတယ်။ အဲ့ဒီ function ဟာ array of columns တစ်ခုကို return ပြန်ပေးပါတယ်။ Delimiter ကို သတ်မှတ်ဖို့ဆိုရင် optional parameters တွေအများကြီးရှိပြီး default အနေနဲ့ကတော့ comma ကို အသုံးပြုတာဖြစ်ပေမယ့် tab delimited files နဲ့လည်း read လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ example မှာ ပထမဆုံးအနေနဲ့ ရလာတဲ့ $header ကို readable ဖြစ်ဖို့ key တစ်ခုဟာ value ဖြစ်ဖို့ရန်နဲ့ value ဟာ key ဖြစ်ဖို့အတွက်  array ကို flip လုပ်ရပါမယ်။ Flip လုပ်ဖို့အတွက် array_flip() function ကို အသုံးပြုပါတယ်။ အဲ့ဒါပြီးတဲ့နောက်မှာတော့ အဲ့ဒီ keys တွေတစ်ခုချင်းစီကို သူတို့ရဲ့ own variable ထဲကို ထည့်ဖို့အတွက် extract() function ကို အသုံးပြုမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            /*
            * read csv of contacts
            */
            $title = 'People Recommendations';
            require 'inc/header.php';

            /*echo '&lt;pre&gt;';
            include 'data/csv/people.csv';
            echo '&lt;pre&gt;';*/

            if (($fh = fopen('data/csv/people.csv', 'r')) !== false) {
                $header = fgetcsv($fh);
                //var_dump($header);
                extract(array_flip($header));
                //echo $first;
            
                echo '&lt;div class="container-fluid"&gt;';
                echo '&lt;h1&gt;People Recommendations&lt;/h1&gt;';
                echo '&lt;hr&gt;';
                echo '&lt;div class="row"&gt;';
                    $count = 0;
                    while (($contact = fgetcsv($fh)) !== false) {
                        if ($count > 0 && $count % 4 == 0) {
                            echo "&lt;/div&gt;\n";
                            echo '&lt;div class="row"&gt;';
                        }
                        $count++;
                        echo '&lt;div class="col-xs-6 col-md-3"&gt;';
                        echo '&lt;div class="thumbnail"&gt;';
                        echo '&lt;img src="' . $contact[$img] . '" &gt;';
                        echo '&lt;div class="caption"&gt;';
                        echo '&lt;h4 class="media-heading"&gt;' . $contact[$first];
                        echo ' ' . $contact[$last] . '&lt;/h4&gt;';
                        echo '&lt;a href="http://' . $contact[$website] . '" target="_blank"&gt;' . $contact[$website] . '&lt;/a&gt;';
                        echo '&lt;br&gt;';
                        echo 'Twitter: &lt;a href="https://twitter.com/' . $contact[$twitter] . '" target="_blank"&gt;@' . $contact[$twitter] . '&lt;/a&gt;';
                        echo '&lt;/div&gt;';
                        echo '&lt;/div&gt;';
                        echo '&lt;/div&gt;';
                    } 
                echo '&lt;/div&gt;';
                echo '&lt;/div&gt;';
                
                    fclose($fh);
                
                }
            
            require 'inc/footer.php';
            
            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Writing CSV File</h2>
    <p>CSV file ကို reading လုပ်ခြင်းဟာ တစ်ကယ်ကို handy ဖြစ်ပြီးတော့ ကျွန်တော်တို့အနေနဲ့ အဲ့ဒီ data ကို suggestion page မှာ display လုပ်ဖို့ အသုံးပြုနိုင်ပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့က နောက်ထပ် suggestions တွေ ထပ်ထည့်ချင်တဲ့အခါမျိုးလည်း ရှိနိုင်ပါတယ်။ ကျွန်တော်တို့ဟာ CSV file ကို တိုက်ရိုက် open လုပ်လို့ရတယ်ဆိုပေမယ့် ကျွန်တော်တို့က person တစ်ယောက် add လုပ်တဲ့ form တစ်ခုကို fill လုပ်ချင်တယ်ဆိုရင်တော့ သူဟာ အလုပ်လုပ်မှာမဟုတ်ပါဘူး။ ဒါကြောင့် ကျွန်တော်တို့ CSV file ထဲမှာ additional line တွေထပ်ထည့်ပေးဖို့လိုပါတယ်။ အရင်ဆုံး inc folder ထဲမှာ write_csv.php file ဆောက်ပြီး သူ့ထဲမှာ new contact အတွက် array တစ်ခု create လုပ်ပါမယ်။ ကျွန်တော်တို့ဟာ add person form ကနေလာတဲ့ form data ကို အသုံးပြုပါမယ်။ အဲ့ထဲမှာ website နဲ့ image က URL တွေဖြစ်တဲ့အတွက် filter လုပ်တဲ့အခါ FILTER_SANITIZE_URL လို့ပြောင်းရေးပေးရပါမယ်။ a လို့ရေးတဲ့ append mode ဟာ file ကို open လုပ်ပြီး file pointer ကို file ရဲ့ နောက်ဆုံးမှာ place လုပ်ပေးပါတယ်။ fputcsv() ဆိုတဲ့ function ကတော့ fgetcsv() လိုမျိုး file handler ကို pass လုပ်ပေးပါတယ်။ ဒီတစ်ခါ fputcsv() ထဲမှာ new array ကို pass လုပ်ပါမယ်။ ကျွန်တော်တို့ add people ကိုနှိပ်ပြီး add လုပ်လိုက်တဲ့အခါမှာ people.csv file ထဲမှာ ကျွန်တော်တို့ add လိုက်တဲ့ person က new line မဆင်းတဲ့အတွက် ပြသနာဖြစ်နိုင်ပါတယ်။ ဒီအတွက် အရင်ဆုံး read ရော write ရောလုပ်ပေးရပါမယ်။ ဒါကြောင့် ကျွန်တော်တို့ mode ထဲမှာ plus (+) ကိုသုံးပေးရပါမယ်။ fputcsv() function ကိုမခေါ်ခင် fseek() ဆိုတဲ့ function ကို အရင်အလုပ်လုပ်ပါမယ်။ fseek() function ကတော့ file pointer ကို move လုပ်ပေးပါတယ်။ fseek() ဟာ parameter 3 ခုလက်ခံပေးပြီး အဲ့ဒါတွေကတော့ file handler, offset နဲ့ pointer ကို ဘယ်ကစမယ်ဆိုတာ ပြောပြပေးတဲ့ whence တို့ပဲဖြစ်ပါတယ်။ </p>
    <p>Example of write_csv.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $new_person = [
                filter_input(INPUT_POST, 'first', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'last', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'website', FILTER_SANITIZE_URL),
                filter_input(INPUT_POST, 'twitter', FILTER_SANITIZE_STRING),
                filter_input(INPUT_POST, 'img', FILTER_SANITIZE_URL),
            ];

            if (($fh = fopen('../data/csv/people.csv', 'a')) !== false){
                fputcsv($fh, $new_person);
                fclose($fh);
            }
            header ('location: ../people.php');

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Reading JSON</h2>
    <p>ကျွန်တော်တို့အနေနဲ့ web ပေါ်မှာ ဘာကိုပဲ build လုပ်ချင်လုပ်ချင် JSON data ဆီကို run လုပ်ပေးရပါလိမ့်မယ်။ API တစ်ခုကနေ data ကို request လုပ်တဲ့အခါ JSON က အဲ့ဒီ request လုပ်လိုက်တဲ့ data ကို response တစ်ခုအနေနဲ့ လက်ခံပေးရပါတယ်။ ဒါဟာ configuration files တွေအတွက် common format တစ်ခုလည်းဖြစ်ပါတယ်။ JSON ရဲ့နာမည်ကြီးလာရတဲ့အချက်က JSON ဟာ structured ချထားတဲ့ data တွေကို encode လုပ်ရတာလွယ်ကူပြီး အဲ့ဒီ data တွေကို systems တွေကြားမှာ transfer လုပ်ပေးနိုင်ပါတယ်။ သူ့မှာ simple markup ရှိပြီး format လုပ်တဲ့အခါမှာလည်း လူတွေကို read လုပ်နိုင်အောင် ထောက်ပံ့ပေးပါတယ်။ Modern languages တွေမှာဆိုရင် JSON ဟာ အလွယ်တကူ validate & transform လုပ်နိုင်ပါတယ်။ JSON ရဲ့အရှည်ကောက်ကတော့ JavaScript Object Notation ဖြစ်တယ်ဆိုပေမယ့် ဘယ် JavaScript ကိုမှ ရေးဖို့မလိုအပ်ပါဘူး။ PHP မှာ JSON objects တွေကနေ PHP objects & arrays အဖြစ်ပြောင်းလဲဖို့ handy function တစ်ခုရှိပါတယ်။ ကျွန်တော်တို့အနေနဲ့ PHP က object or array တစ်ခုကနေ JSON ကိုလည်း ပြောင်းလဲနိုင်ပါတယ်။ Example မှာဆိုရင်တော့ Top programming books တွေကို share လုပ်ထားတာဖြစ်ပါတယ်။ ပထမဆုံးပြုလုပ်ရမှာက JSON file ထဲက contents တွေကို ရယူဖို့အတွက် file_get_contents() function ကို အသုံးပြုရပါမယ်။ ထို့နောက် အဲ့ဒီ contents တွေကို object တစ်ခုအဖြစ် turn လုပ်ဖို့ json_decode() ဆိုတဲ့ function ကို အသုံးပြုသွားမှာဖြစ်ပါတယ်။ </p>
    <p>Example of books.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            /*
             * read json data for book recommendations
             */
            $title = 'Book Recommendations';
            require 'inc/header.php';

            /*echo '&lt;pre&gt;';
            include 'data/json/top_programming_books.json';
            echo '&lt;/pre&gt;';*/

            echo '&lt;h1&gt;Book Recommendations&lt;/h1&gt;';
            echo '&lt;hr&gt;';
            $books = json_decode(file_get_contents('data/json/top_programming_books.json'));
            if (is_object($books->collection->books[0])) {
                foreach ($books->collection->books as $book) {
                    echo '&lt;div class="panel panel-default"&gt;';
                        echo '&lt;div class="panel-heading"&gt;';
                            echo '&lt;h3 class="panel-title"&gt;' . $book->title . '&lt;/h3&gt;';
                            echo 'by ' . $book->author_name;
                        echo '&lt;/div&gt;';
                        echo '&lt;div class="panel-body media"&gt;';
                            echo '&lt;div class="media-left media-top"&gt;';
                                echo '&lt;img class="media-object" src="' . $book->book_image_url . '" /&gt;';
                            echo '&lt;/div&gt;';
                            echo '&lt;div class="media-body"&gt;';
                            if (strlen($book->book_description) < 500) {
                                echo $book->book_description;
                            } else {
                                echo substr($book->book_description, 0, strpos($book->book_description, ' ', 500)) . '...';
                            }
                                echo '&lt;br&gt;';
                                echo '&lt;a href="' . $book->link . '" target="_blank"&gt;Learn more...&lt;/a&gt;';
                            echo '&lt;/div&gt;';
                        echo '&lt;/div&gt;';
                    echo '&lt;/div&gt;';
                }
            }


            require 'inc/footer.php';

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Writing JSON</h2>
    <p>JSON နဲ့အလုပ်လုပ်ရတဲ့အကြောင်းအရင်းကတော့ web ပေါ်မှာရှိတဲ့ data တွေကို sharing လုပ်တဲ့အခါမှာ popular format တစ်ခုဖြစ်လာတဲ့ main reason တစ်ခုကြောင့်ဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ ဘယ် object or array ကိုမဆို PHP ကနေယူပြီး ဘယ် particular language ကိုမှ မမှီခိုဘဲ share လုပ်နိုင်တဲ့ JSON object အဖြစ်ပြောင်းလဲလို့ရပါတယ်။ ကျွန်တော်တို့ example မှာဆိုရင် အရင်ဆုံး $new_book ဆိုတဲ့ array တစ်ခုကို create လုပ်ပြီး သူ့ထဲမှာတော့ Add Book form က ကျွန်တော်တို့ add လုပ်မယ့် form data ကိုအသုံးပြုမှာဖြစ်ပါတယ်။ ပြီးရင်တော့ JSON file ထဲက contents တွေကို ယူပြီး object တစ်ခုအဖြစ် turn လုပ်ဖို့ json_decode() function ကို အသုံးပြုပါမယ်။ ပြီးတဲ့နောက်မှာတော့ ကျွန်တော်တို့ object ကို JSON အဖြစ် ပြန်ပြီး turn လုပ်ဖို့အတွက် json_encode() ဆိုတဲ့ function ကို အသုံးပြုပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>Example of add_books.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            $title = "Add Books Form";

            require 'inc/header.php';

                echo "&lt;div class='container-fluid'&gt;";
                echo "&lt;h1&gt;Add Book&lt;/h1&gt;";
                echo "&lt;hr&gt;";
                echo "&lt;div class='add_form'&gt;";
                echo '&lt;form action="inc/write_json.php" method="post"&gt;';
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlInput1"&gt;Title&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder=""&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlSelect1"&gt;Link&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="link" id="exampleFormControlInput1" placeholder="http://"&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlSelect2"&gt;Image&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="book_image_url" id="inlineFormInputGroupUsername2" placeholder="http://"&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlTextarea1"&gt;Description&lt;/label&gt;';
                echo '&lt;textarea class="form-control" name="book_description" id="exampleFormControlTextarea1" rows="3"&gt;&lt;/textarea&gt;';
                echo '&lt;/div&gt;';
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlTextarea1"&gt;Pages&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="num_pages" id="exampleFormControlInput1" placeholder=""&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlTextarea1"&gt;Author&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="author_name" id="exampleFormControlInput1" placeholder=""&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlTextarea1"&gt;ISBN&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="isbn" id="exampleFormControlInput1" placeholder=""&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlTextarea1"&gt;Rating&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="average_rating" id="exampleFormControlInput1" placeholder=""&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlTextarea1"&gt;Published&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="book_published" id="exampleFormControlInput1" placeholder=""&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;button type="submit" class="btn btn-success"&gt;Add Book&lt;/button&gt;';
                echo "&lt;/form&gt;";
                echo "&lt;/div&gt;";
                echo "&lt;/div&gt;";
                
            require 'inc/footer.php';
                
            ?&gt;  
        </code>
    </pre>
    <p>Example of write_json.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $new_book = [
                'title' => filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING),
                'link' => filter_input(INPUT_POST, 'link', FILTER_SANITIZE_URL),
                'book_image_url' => filter_input(INPUT_POST, 'book_image_url', FILTER_SANITIZE_URL),
                'book_description' => filter_input(INPUT_POST, 'book_description', FILTER_SANITIZE_STRING),
                'num_pages' => filter_input(INPUT_POST, 'num_pages', FILTER_SANITIZE_NUMBER_INT),
                'author_name' => filter_input(INPUT_POST, 'author_name', FILTER_SANITIZE_STRING),
                'isbn' => filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_NUMBER_INT),
                'average_rating' => filter_input(INPUT_POST, 'average_rating', FILTER_SANITIZE_NUMBER_FLOAT),
                'book_published' => filter_input(INPUT_POST, 'title', FILTER_SANITIZE_NUMBER_INT)
            ];

            $file = '../data/json/top_programming_books.json';
            $books = json_decode(file_get_contents($file));

            if (is_object($books->collection->books[0])) {
                $books->collection->books[] = $new_book;
            }

            $json = json_encode($books, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            // echo '&lt;pre&gt;' . $json . '&lt;/pre&gt;';

            file_put_contents($file, $json);
            header('location: ../books.php');

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Reading XML</h2>
    <p>XML ကို web ပေါ်မှာ data တွေ sharing လုပ်ဖို့အတွက် အသုံးပြုပါတယ်။ သို့သော်လည်း XML ဟာ ပိုပြီးတော့ complicate ဖြစ်ပြီး လူအများစုကတော့ JSON နဲ့ပဲ ease လုပ်တာများပါတယ်။ ဒါပေမယ့် XML ကတော့ ပိုပြီးတော့ detail ကျပါတယ်။ ကျွန်တော်တို့အနေနဲ့ simple object တစ်ခုတည်းနဲ့ တော်တော်များများကို convey လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ example ထဲမှတော့ XML ကိုသုံးပြီး favorite podcasts တွေကို share လုပ်ထားပါတယ်။ ဒါကြောင့် XML နဲ့အလုပ်လုပ်ဖို့အတွက် PHP functionality အချို့ကို အသုံးပြုသွားပါမယ်။ XML ဟာ HTML လိုမျိုးပဲ tags တွေကို အသုံးပြုပါတယ်။ ကျွန်တော်တို့က အဲ့ဒီ tags တွေကို visible (မြင်ရ)ဖို့အတွက် htmlspecialchars() ဆိုတဲ့ function ကို အသုံးပြုဖို့လိုအပ်ပါတယ်။ ကျွန်တော်တို့ podcasts.php ထဲမှာဆိုရင် podcast တစ်ခုချင်းစီအတွက် multiple XML files တွေရှိပါတယ်။ ဒါကို XML directory ကနေ files တွေကို read လုပ်ပြီး array တစ်ခုထဲကို ထည့်ပေးလိုက်ပါမယ်။ ထို့နောက် XML file ရဲ့ directory ကို set လုပ်ပေးရပါမယ်။ ပြီးရင်တော့ XML file ကို object တစ်ခုထဲကို parse လုပ်ချင်ဖို့အတွက် simplexml_load_file() ဆိုတဲ့ function ကို အသုံးပြုပေးရပါမယ်။ Example ထဲမှာတော့ episode တိုင်းကို show မလုပ်ချင်တဲ့အတွက် အဲ့ဒီလို show လုပ်မယ့်အစား random item ကိုပဲ pull လုပ်ပါမယ်။ Browser ကို run ပြီး refresh လုပ်တဲ့အခါတိုင်းမှာ random episode တစ်ခုနဲ့အတူ list of podcasts တွေနဲ့ learn more ဆိုတဲ့ link ကို တွေ့ရမှာဖြစ်ပါတယ်။ အဲ့ဒီမှာနောက်ထပ်ပြချင်တာတစ်ခုက external files တွေကို pulling လုပ်သွားမှာဖြစ်ပါတယ်။ ဒါဟာ files တွေကို read လုပ်တဲ့ ဘယ် functions တွေမဆို ဘယ်နေရာကနေဖြစ်ဖြစ် ဘယ် file ကိုမဆို read လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့မှာ access & correct permissions တွေရှိသလောက် read လုပ်သွားမှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ files တွေက local computer, local network or web ပေါ်မှာရှိနေတယ်ဆိုရင်တောင်မှာ ပြသနာမရှိပါဘူး။ </p>
    <p>Example of podcasts.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            /*
             * read xml data for PHP podcasts
             * write a new xml file for a podcast
             */
            $title = 'Podcast Recommendations';
            require 'inc/header.php';

            /*echo '&lt;pre&gt;';
            echo htmlspecialchars(file_get_contents('data/xml/educate_yourself.xml'));
            echo '&lt;/pre&gt;';*/

            $files = array();
            $files[] = 'http://simplecast.com/podcasts/279/rss';
            $dir = 'data/xml';
            if ($fh = opendir($dir)) {
                while (($entry = readdir($fh)) !== false) {
                    // don't want any file that start with dot (.)
                    if (substr($entry, 0, 1) != '.') {
                        $files[] = $dir . '/' . $entry;
                    }
                }
                closedir($fh);
            }

            echo '&lt;h1&gt;Podcast Recommendations&lt;/h1&gt;';
            echo '&lt;hr&gt;';
            if (!empty($files)) {
                foreach ($files as $file) {
                    // to parse XML file into object
                    $xml = simplexml_load_file($file);
                    echo '&lt;div class="panel panel-default"&gt;';
                        echo '&lt;div class="panel-heading"&gt;';
                            echo '&lt;h3 class="panel-title"&gt;&lt;a href="' . $xml->channel->link . '" target="_blank"&gt;' . $xml->channel->title . '&lt;/a&gt;&lt;/h3&gt;';
                        echo '&lt;/div&gt;';
                        echo '&lt;div class="panel-body"&gt;';
                            echo '&lt;p&gt;' . $xml->channel->description . '&lt;/p&gt;';
                            $random = rand(0, count($xml->channel->item)-1);
                            echo '&lt;p&gt;&lt;strong&gt;Sample: ' . $xml->channel->item[$random]->title . '&lt;/strong&gt; - ';
                            echo $xml->channel->item[$random]->description .'&lt;/p&gt;';
                            echo '&lt;audio controls&gt;';
                            echo '&lt;source src="' . $xml->channel->item[$random]->enclosure->attributes()->url . '" type="audio/mpeg"&gt;';
                            echo 'Your browser does not support the audio element.';
                            echo '&lt;/audio&gt;';
                            echo '&lt;p&gt;&lt;a href="' . $xml->channel->link . '" target="_blank"&gt;Learn more and subscribe&lt;/a&gt;&lt;/p&gt;';
                        echo '&lt;/div&gt;';
                    echo '&lt;/div&gt;';
                }
            }

            require 'inc/footer.php';

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Writing XML</h2>
    <p>အခု ကျွန်တော်တို့အနေနဲ့ PHP ကိုသုံးပြီး XML data တွေကို ဘယ်လို control လုပ်မလဲဆိုတာ လေ့လာသွားပါမယ်။ ပထမဆုံး XML object တစ်ခုထဲကို ကျွန်တော်တို့ modify လုပ်ချင်တဲ့ podcast file ကို loading လုပ်ပါမယ်။ အဲ့ဒီမှာကျွန်တော်တို့က data ကို add_episode form ကရလာတဲ့ data ကို အသုံးပြုပါမယ်။ ပြီးရင်တော့ input form ကနေရလာတဲ့ new date object ကို create လုပ်ပါမယ်။ လိုအပ်တာတွေထပ်ရေးပြီး ကျွန်တော်တို့က asXML() method နဲ့ browser မှာ run ကြည့်ပါမယ်။ Simple XML ဟာ XML ကို pretty or easy to read ဖြစ်ဖို့ handle မလုပ်နိုင်ပါဘူး။ ဒီလို pretty or easy to read ဖြစ်ဖို့ packages တွေရှိပါတယ်။ ကျွန်တော်တို့က tags (><) တွေနဲ့ meet ဖြစ်ရင် line break ထည့်ပါမယ်။ Example အပြည့်အစုံကိုတော့ အောက်မှာ ကြည့်ရှုနိုင်ပါတယ်။ </p>
    <p>Example of add_episode.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php
            $title = "Add Books Form";
                require 'inc/header.php';

                echo "&lt;div class='container-fluid'&gt;";
                echo "&lt;h1&gt;Add Episode&lt;/h1&gt;";
                echo "&lt;hr&gt;";
                echo "&lt;div class='add_form'&gt;";
                echo '&lt;form action="" method="post"&gt;';
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlInput1"&gt;Podcast&lt;/label&gt;';
                echo '&lt;select class="custom-select"&gt;';
                echo '&lt;option selected&gt;Free The Geek&lt;/option&gt;';
                echo '&lt;option value="1"&gt;Educate Yourself&lt;/option&gt;';
                echo '&lt;option value="2"&gt;Phproundtable&lt;/option&gt;';
                echo '&lt;option value="3"&gt;Voices Of The Elephpant&lt;/option&gt;';
                echo '&lt;/select&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlSelect1"&gt;Title&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder=""&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlSelect2"&gt;Link&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="link" id="inlineFormInputGroupUsername2" placeholder="http://"&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlSelect2"&gt;Date&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="pubDate" id="inlineFormInputGroupUsername2" placeholder=""&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlTextarea1"&gt;Descrioption&lt;/label&gt;';
                echo '&lt;textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"&gt;&lt;/textarea&gt;';
                echo '&lt;/div&gt;';
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlInput1"&gt;Explict&lt;/label&gt;';
                echo '&lt;select class="custom-select"&gt;';
                echo '&lt;option selected&gt;clean&lt;/option&gt;';
                echo '&lt;option value="1"&gt;Yes&lt;/option&gt;';
                echo '&lt;option value="2"&gt;No&lt;/option&gt;';
                echo '&lt;/select&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;div class="form-group"&gt;';
                echo '&lt;label for="exampleFormControlSelect2"&gt;Duration&lt;/label&gt;';
                echo '&lt;input type="text" class="form-control" name="book_image_url" id="inlineFormInputGroupUsername2" placeholder="00:00:00"&gt;';
                echo "&lt;/div&gt;";
                echo '&lt;button type="submit" class="btn btn-success"&gt;Add Episode&lt;/button&gt;';
                echo "&lt;/form&gt;";
                echo "&lt;/div&gt;";
                echo "&lt;/div&gt;";
                
                require 'inc/footer.php';
            ?&gt;
        </code>
    </pre>
    <p>Example of write_xml.php File:</p>
    <pre>
        <code class="html hljs xml">
            &lt;?php

            $file = '../data/xml' . filter_input(INPUT_POST, 'file', FILTER_SANITIZE_STRING);
            if ($xml = simplexml_load_file($file)) {
                $item = $xml->channel->addChild('item');
                $item->addChild('title', filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
                $item->addChild('link', filter_input(INPUT_POST, 'link', FILTER_SANITIZE_URL));
                $date = new DateTime(filter_input(INPUT_POST, 'pubDate', FILTER_SANITIZE_STRING));
                $item->addChild('pubDate', $date->format('D, M Y H:i:s +0000'));
                $item->addChild('description', filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
            
                $itunes = "http://www.itunes.com/dtds/podcast-1.0.dtd";
                $item->addChild('subtitle', filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING), $itunes);
                $item->addChild('summary', filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING), $itunes);
                $item->addChild('explicit', filter_input(INPUT_POST, 'explicit', FILTER_SANITIZE_STRING), $itunes);
                $item->addChild('duration', filter_input(INPUT_POST, 'duration', FILTER_SANITIZE_STRING), $itunes);
            
                /*echo '&lt;pre&gt;';
                echo htmlspecialchars(str_replace('><', ">\n<", $xml->asXML()));
                echo '&lt;/pre&gt;';*/
            
                $xml->asXML($file);
                header('location: ../podcast.php');
            }

            ?&gt;
        </code>
    </pre>
    <hr>


    <h2>Conclusion</h2>
    <p>PHP ဟာ files တွေကို reading ၊ writing နဲ့ parsing လုပ်တဲ့နေရာမှာ functions, features နဲ့ options တွေအများကြီးကို offer လုပ်ပေးပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ အဲ့ဒီလိုပြုလုပ်တဲ့အခါမှာ မှတ်ထားရမှာက data files တွေနဲ့ အပြန်အလှန် interact လုပ်တဲ့နေရာမှာ အခြေခံကျနဲ့ နည်းလမ်း 3 ခုရှိပါတယ်။ ပထမဆုံးတစ်ခုကတော့ file ကို connection တစ်ခု open လုပ်ပြီး သူ့ကို close မလုပ်ခင်မှာပဲ line-by-line အရ handle လုပ်ပေးရပါမယ်။ ဒုတိယတစ်ခုကတော့ entire file တစ်ခုလုံးကို single string အဖြစ် အလုပ်လုပ်ခိုင်းပါမယ်။ နောက်ဆုံးတတိယနည်းလမ်းကတော့ entire file တစ်ခုလုံးကို object တစ်ခု (သို့) array တစ်ခုအဖြစ် အလုပ်လုပ်စေတာပဲ ဖြစ်ပါတယ်။ </p>
    


</body>
</html>