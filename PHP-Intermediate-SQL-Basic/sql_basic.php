<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intermediate Level - SQL Basics</title>
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


    <h2>Data, Databases, and SQL</h2>
    <p>ဒီသင်ခန်းစာမှာ ကျွန်တော်တို့အနေနဲ့ databases တွေအကြောင်းကို လေ့လာသွားမှာဖြစ်ပါတယ်။ ဒါပေမယ့် အဲ့ဒီကိုမသွားခင် ပိုအရေးကြီးတာက Structured Query Language လို့ခေါ်တဲ့ SQL ရဲ့ basic သဘောတရားကို အရင်လေ့လာရပါမယ်။ သူ့ကို နောက်တစ်မျိုးအနေနဲ့ SEQUEL လို့လည်းခေါ်ပါတယ်။
        Specialized Programming Language ဟာ databases တွေထဲကနေ information တွေရဖို့အတွက် SQL ကို အသုံးပြုပါတယ်။ SQL ကို သေချာသိထားခြင်းဟာ ကျွန်တော်တို့ web development ကနေ mobile ဖြစ်ဖြစ် ဘယ် careers ပဲပြောင်းပြောင်း technical marketing နဲ့ business analyst
        roles တွေမှာ တကယ်ကို အသုံးဝင်နေမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ dynamic web applications တွေကို တည်ဆောက်နိုင်ရုံသာမက ကျွန်တော်တို့ marketing campaigns တွေဘယ်လောက်ထိရောက်လဲဆိုတာ ဆုံးဖြတ်ဖို့အတွက် custom reports တွေကိုပါ ရေးပေးနိုင်ပါတယ်။ ဥပမာ
        store ဆိုင်တစ်ခုရဲ့ တစ်ခုအတွင်းရောင်းအားကို အနှစ်ချုပ်ပြန်ကြည့်ချင်တဲ့အခါ ကြည့်လို့ရနိုင်တဲ့ reports တွေကိုပြောတာပါ။ အထူးသဖြင့် ဒီသင်ခန်းစာမှာ the process of querying or databases ကနေ information တွေကို searching လုပ်ဖို့အတွက်ပဲဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Data is Everywhere</h2>
    <p>Databases တွေကို နေရာတိုင်းမှာအသုံးပြုနေကြပါတယ်။ သူတို့ကို mobile applications တွေနဲ့ websites တွေမှာ နေတိုင်းလိုလို အသုံးပြုနေကြပါတယ်။ Data ဆိုတာဘာလဲလို့ နားလည်ဖို့ဆိုရင် real world object တစ်ခုရယ်နဲ့ data ဟာ ဘယ်လိုဆက်နွယ်နေသလဲဆိုတာကို အသေးစိတ်လေ့လာရင်
        သိရှိနိုင်ပါတယ်။ သင်တို့အနေနဲ့ rotary card file လိုမျိုးအရာတွေကို တစ်ခြားတစ်ယောက်ယောက်ရဲ့ desk မှာ မြင်ဖူးပါလိမ့်မယ်။ သူတို့ဟာ Person တစ်ခုယောက်ရဲ့ name, phone-number နဲ့ address လိုမျိုး contact information တွေကို store လုပ်ဖို့အတွက် အသုံးပြုတာဖြစ်ပါတယ်။
        အဲ့ဒီ cards တွေထဲက piece of information တွေကို file ထဲကိုထည့်လိုက်ပြီး တစ်ယောက်ယောက်က အဲ့ဒီ information တွေကို update, add, remove လုပ်ချင်တဲ့အချိန်မှာ SQL ကိုသုံးပြီး ပြင်လိုက်တာဖြစ်ပါတယ်။ ထို့ကြောင့် အဲ့ဒီ information တွေဆိုတာ Data ပဲဖြစ်ပါတယ်။
        တစ်ဖက်မှာ rotary file ကတော့ data တွေကို store လုပ်ဖို့အတွက် database တစ်ခုဖြစ်ပါတယ်။ ဒီသင်ခန်းစာမှာ ကျွန်တော်တို့က computerized databases တွေရဲ့ အခြေခံသဘောတရားတွေနဲ့ သူတို့ထဲက structures တွေကို လေ့လာသွားမှာဖြစ်ပါတယ်။ အရေးကြီးတဲ့အချက်က ကျွန်တော်တို့ဟာ
        database တစ်ခုထဲက information တွေကို ဘယ်လို reteieve (ဆွဲထုတ်) ရမလဲဆိုတာကို လေ့လာရပါမယ်။ Amazon ကတော့ သူတို့ရောင်းချနေတဲ့ data or information တွေကို store လုပ်ဖို့ databases တွေကို အသုံးပြုထားပါတယ်။ ပြီးတော့ shipping ၊ billing addresses နဲ့ customer
        payment information တွေလိုမျိုး customer ရဲ့ order information တွေကိုလည်း details ကျကျ store လုပ်ထားပေးပါတယ်။ အဲ့ဒါကနေမှ customer တွေက သူတို့ဝယ်ချင်တဲ့ wish list ကို ရွေးချယ်ပေးရတာဖြစ်ပါတယ်။ Facebook ကတော့ user's friendships, likes, private messages
        နဲ့ wall posts ကဲ့သို့သော information တွေကို database ထဲမှာ သိမ်းဆည်းထားတာဖြစ်ပါတယ်။ အခုကျွန်တော်ပြောခဲ့သလိုပါပဲ။ Databases တွေမရှိဘဲ ကျွန်တော်တို့ rely လုပ်နေရတဲ့ services တွေဟာလည်း ကျွန်တော်တို့ customer တွေလိုချင်တဲ့အရာကို မပြုလုပ်ပေးနိုင်ပါဘူး။
        အရိုးရှင်းဆုံးပြောရမယ်ဆိုရင် database တစ်ခုဆိုတာ data တွေကို နောင်တစ်ချိန်မှာ ဆွဲထုတ်ကြည့်နိုင်ဖို့အတွက် information ရဲ့ amounts တွေကို storing လုပ်ပေးတဲ့ tool တစ်ခုပဲဖြစ်ပါတယ်။ ဒါကြောင့်လည်း software engineers တွေက ပင်ပင်ပန်းပန်းလုပ်မနေရဘဲ information
        တွေကို database ထဲမှာ သိမ်းထားမယ်၊ လိုအပ်တဲ့အချိန်မှ မြန်မြန်ဆန်ဆန် retrieve လုပ်ပေးနိုင်တာဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Database with SQL</h2>
    <p>အခု database ဆိုတာဘာလဲလို့ သိပြီးတဲ့နောက်မှာ data နဲ့ database ဟာ business နဲ့ users တွေအကြောင်းနဲ့ပတ်သတ်ပြီး အရေးကြီးတဲ့ မေးခွန်းပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ Marketing ဆင်းနေတယ်ဆိုပါစို့။ Marketer တစ်ယောက်အနေနဲ့ ကျွန်တော်တို့က ပြီးခဲ့တဲ့လမှာ
        လုပ်ဆောင်ခဲ့တဲ့ different campaigns တွေကို ကြည့်ချင်တယ်ဆိုပါစို့။ ဒါကို ကျွန်တော်တို့က database ထဲမှာ information တွေအဖြစ်နဲ့ store လုပ်ထားမယ်ဆိုရင် ပြန်ကြည့်ချင်တဲ့အခါ SQL လို့ခေါ်တဲ့ special purpose programming language တစ်ခုလိုအပ်ပါတယ်။ Acronym
        SQL ရဲ့အရှည်ကောက်ကတော့ Structured Query Language ပဲဖြစ်ပါတယ်။ Database တစ်ခုကနေ Reading data လုပ်ခြင်းကို Querying လုပ်တယ်လို့ခေါ်ပါတယ်။ SQL ကနားလည်နိုင်တဲ့ databases တွေအများကြီးရှိပါတယ်။ အဲ့ဒီ databases တွေကတော့ MySQL, PostgreSQL, Microsoft
        SQL, Oracle နဲ့ SQLite တို့ဖြစ်ပါတယ်။ အဲ့ဒီ databases တွေတစ်ခုချင်းစီဟာ SQL programming language ကိုသုံးပြီး read or queried လုပ်နိုင်ပါတယ်။ MongoDB, CouchBase နဲ့ Redis တွေလိုမျိုး ပိုပြီးတော့ specialized methods ကျတဲ့ database types တွေလည်းအများကြီးရှိပါတယ်။
        သူတို့ကတော့ NoSQL databases တွေဖြစ်ကြပါတယ်။ ကျွန်တော်တို့အနေနဲ့ SQL ကိုတစ်ကြိမ်တည်း land လုပ်ထားရင် အဲ့ဒီ databases အားလုံးကို အသုံးပြုနိုင်မှာဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>Organizing Data with Database</h2>
    <p>Database တစ်ခုချင်းစီမှာဆိုရင် အရေးကြီးတဲ့ components နှစ်ခုရှိပါတယ်။ Data လို့ခေါ်တဲ့ information တွေကို store လုပ်တာနဲ့ schema လို့ခေါ်တဲ့ data ကို ဘယ်လို organize လုပ်မလဲဆိုတာပဲဖြစ်ပါတယ်။ Schema ဟာ data တွေကို ဘယ်လို store လုပ်သင့်သလဲနဲ့ သူတို့ကို
        different sections တွေအဖြစ် ဘယ်လို divide လုပ်သင့်လဲဆိုတာကို အခြေခံထားတာဖြစ်ပါတယ်။ ပြီးတော့ schema ဟာ sections တွေတစ်ခုချင်းစီက အခြား sections တွေနဲ့ ဘယ်လို related ဖြစ်နေလဲဆိုတာကို determine လုပ်ပေးပါသေးတယ်။ အဲ့ဒီ sections တွေကိုတော့ Tables လို့ခေါ်ပါတယ်။
        Table မှာရှိတဲ့ row တွေက horizontal အလိုက်သွားပြီး ၊ column တွေကတော့ vertical အလိုက်သွားတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ မှတ်သားထားရမှာကတော့ database တစ်ခုရဲ့ sections တွေကို tables လို့ခေါ်တာပဲဖြစ်ပါတယ်။ အဲ့ဒီ tables ထဲက information တွေကို SQL သုံးပြီးတော့
        filter လုပ်နိုင်ပါတယ်။ </p>
    <hr>


    <h2>Types of Data</h2>
    <p>Table Columns တွေကို schema (အစီအစဉ်) တစ်ခုအတွင်းမှာ အချို့သော data types တွေရှိဖို့အတွက် define လုပ်ထားပါတယ်။ Data type တစ်ခုဟာ store လုပ်ထားတဲ့ value ကို ဖော်ပြပေးပါတယ်။ Regular basic တစ်ခုမှာဆိုရင် data types တွေအများကြီးရှိပါတယ်။ အဲ့ဒါတွေကတော့
        text types, numeric types နဲ့ date types တို့ပဲဖြစ်ပါတယ်။ Text types တွေကို များသောအားဖြင့် names (သို့) descriptions တွေကို store လုပ်ဖို့အတွက်သုံးပါတယ်။ Numeric types တွေကို things တွေရဲ့ prices, ages နဲ့ quantities တွေကို store လုပ်ဖို့အတွက်
        အသုံးပြုနိုင်ပြီး dates types တွေကိုတော့ time နဲ့ related ဖြစ်နေတဲ့ ဘယ်အရာအတွက်မဆို သုံးနိုင်ပါတယ်။ Eg. Store temporal information (e.g. dates and times) ။ Data types တွေကို အသုံးပြုရခြင်းရဲ့ ရည်ရွယ်ချက်ကတော့ နောက်ရေးမယ့် SQL မှာ အရေးပါနေလို့ပဲဖြစ်ပါတယ်။
        သူဟာ types နဲ့ columns တွေဘယ်လို လိုက်နာရမလဲဆိုတာကို enforce လုပ်ပေးပါတယ်။ ဥပမာ schema တစ်ခုဖြစ်တဲ့ coin sorter အဖြစ်စဉ်းစားကြည့်မယ်ဆိုရင် coin sorter တစ်ခုကို သူ့ရဲ့ different types of coins တွေကို columns အဖြစ် sort လုပ်မှာဖြစ်ပါတယ်။ အဲ့ဒီမှာ
        coin sorter က correct ဖြစ်တဲ့ coin types တွေကိုပဲ correct column ဆီကို ပို့ပေးမှာဖြစ်ပါတယ်။ အဲ့ဒီ coin sorter လိုပဲ database schema ဟာလည်း ဘယ် data တွေကို table ရဲ့ ဘယ် column တစ်ခုချင်းစီကိုသွားရမလဲဆိုတာ prescribes လုပ်ပေးပါတယ်။ ကျွန်တော်တို့
        Database ထဲမှာ မှန်ကန်တဲ့ data types တွေကို ထည့်ထားခြင်းဟာ sorting လုပ်ဖို့ကူညီပေးရုံသာမက e.g. sales figures အားလုံးရဲ့ sum ကို ထုတ်ချင်တာလိုမျိုးအတွက်လည်း တစ်ကယ်ကို အထောက်အကူဖြစ်ပါတယ်။ Generating a sum နဲ့ အခြား mathematical operations တွေကို
        numeric type တစ်ခုတည်းနဲ့တင် sorting လုပ်လို့ရပါတယ်။ Column data types တွေကို နားလည်ထားခြင်းဟာ data ကို ဘယ်လိုဆွဲထုတ်ပြီး database အတွက် design schema ကို လူတွေအတွက် ဘယ်လိုအကူညီရစေလဲဆိုတာကို သိလာစေပါတယ်။ </p>
    <hr>


    <h2>Tools We'll Be Using</h2>
    <p>Company တော်တော်များများဟာ Mode Analytics လိုမျိုး reports တွေကို generate လုပ်ဖို့အတွက် Third-party Services ကို အသုံးပြုကြပါတယ်။ အဲ့ဒီမှာဆိုရင် အပေါ်မှာ SQL code ကိုရေးလိုက်တာနဲ့ သူရဲ့ result ကို အောက်မှာ table နဲ့အတူ ပြပေးတာဖြစ်ပါတယ်။ တစ်ကယ်လို့
        သင်က PHP developer တစ်ယောက်ဆိုရင် phpMyAdmin လို့ခေါ်တဲ့ tool တစ်ခုကို အသုံးပြုဖူးပါလိမ့်မယ်။ အဲ့ဒီမှာဆိုရင် ကျွန်တော်တို့က SQL code အတွက် area တစ်ခုနဲ့result ပြဖို့အတွက် area တစ်ခုကိုတွေ့နိုင်ပါတယ်။ အခြား tools တွေလည်း အများကြီးရှိပါသေးတယ်။ အချို့
        tools တွေက အခြား tools တွေထက် features အချို့ ပိုပြီးပါတာကလွဲလို့ အကုန်လုံးဟာ SQL ရဲ့ knowledge ကိုပဲ အခြေခံထားတာဖြစ်ပါတယ်။ </p>
    <hr>


    <h2>First SQL Statement</h2>
    <p>Structured Query Language လို့ခေါ်တဲ့ SQL ဟာ information တွေကိုရယူဖို့ (သို့) database တစ်ခုကနေ data တွေကို ဆွဲထုတ်ဖို့ရန်အသုံးပြုတဲ့ specialized language တစ်ခုဖြစ်ပါတယ်။ MySQL, Microsoft SQL Server, Oracle, PostgreSQL နဲ့ SQLite တွေကဲ့သို့သော database
        systems တွေအမျိုးမျိုးရှိပါတယ်။ သူတို့အားလုံးကတော့ SQL ကို same language အဖြစ် အသုံးပြုကြပါတယ်။ Spoken languages တွေလိုပဲ programming languages တွေမှာလည်း သူတို့နဲ့ ကိုယ်ပိုင် vocabulary နဲ့ grammatical structure တွေရှိပါတယ်။ Programmers တွေကတော့
        အဲ့ဒီ vocabulary နဲ့ grammar တွေကို Syntax လို့ခေါ်ကြပါတယ်။ Programming languages အများစုမှာ vocabulary ဟာ spoken languages တွေထက် ပိုများပါတယ်။ အဲ့ဒီ vocabulary words တွေဟာ programming မှာဆိုရင် တစ်ကယ်ကို အရေးကြီးပါတယ်။ အဲ့ဒီ vocabulary words
        တွေကို ကျွန်တော်တို့က keywords တွေလို့ ခေါ်ကြပါတယ်။ Keyword တစ်ခုဆိုတာ command တစ်ခုဖြစ်ပြီး ကျွန်တော်တို့ပြုလုပ်ချင်တဲ့ things တွေကို command မှာရိုက်ပြီး computer ကို ခိုင်းစေလိုက်တာဖြစ်ပါတယ်။ အဲ့ဒီလိုပဲ SQL မှာလည်း သူ့ရဲ့ own sets of keywords
        တွေရှိပါတယ်။ SQL code ရဲ့ lines တွေဟာ Statement or Query တစ်ခုအဖြစ် မသိပါဘူး။ SQL မှာရှိတဲ့ statement တစ်ခုဟာ English မှာရှိတဲ့ sentence တစ်ခုနဲ့တူပြီး ၊ query တစ်ခုကတော့ English ထဲမှာရှိတဲ့ question တစ်ခုနဲ့တူပါတယ်။ အခု common SQL query တစ်ခုကို
        ကြည့်ရအောင်။ ကျွန်တော်တို့အနေနဲ့ Books တွေနဲ့ပတ်သတ်တဲ့ data တွေကို table တစ်ခုကနေ information တွေအဖြစ် ယူမှာဖြစ်ပြီးတော့ အဲ့ဒီ table ဟာ database တစ်ခုအတွင်းက rows & columns တွေနဲ့ ပြုလုပ်ထားတယ်ဆိုတာကိုလည်း မှတ်သားထားရပါမယ်။ Books table ထဲမှာရှိတဲ့
        data အားလုံးကိုထုတ်ချင်တယ်ဆိုရင်တော့ SELECT * from books; ဆိုတဲ့ keyword နဲ့ ဆွဲထုတ်ပေးရတာဖြစ်ပါတယ်။ သူတို့ဟာ SQL programming language မှာရှိတဲ့ keywords or special words တွေပဲဖြစ်ပါတယ်။ အဲ့ဒီမှာ SELECT ဆိုတဲ့ command ကတော့ ကျွန်တော်တို့လိုချင်တဲ့
        query ဖြစ်ပါတယ်။ from books ဆိုတာကတော့ Books table ထဲကထုတ်ပါမယ်လို့ ရည်ညွှန်းတာဖြစ်ပြီး asterisk or star character ကတော့ books table ထဲမှာရှိတဲ့ data အားလုံးကိုထုတ်ချင်ပါတယ်လို့ ပြောလိုက်တာဖြစ်ပါတယ်။ ; or semi-colon ကတော့ statement တစ်ခုပြီးဆုံးပြီလို့
        database ကိုအသိပေးလိုက်တာဖြစ်ပါတယ်။ ကျွန်တော်တို့အနေနဲ့ statement ကို database ဆီကို issue လုပ်တဲ့အချိန် Books table ထဲက entries အားလုံးကို return ပြန်ပေးနိုင်ပါတယ်။ General အရပြောရမယ်ဆိုရင် SELECT * from &lt;table name&gt;; ဆိုတာ table ထဲမှာရှိတဲ့
        information တွေအားလုံးကို ဆွဲထုတ်လိုက်တာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <div class="img-size">
        <img src="images/mysql.jpg" alt="MySQL image Screenshot">
    </div>
    <hr>


    <h2>Retrieving Specific Columns of Information </h2>
    <p>ကျွန်တော်တို့ ပြီးခဲ့တဲ့သင်ခန်းစာမှာ table တစ်ခုအတွင်းမှာရှိတဲ့ information အားလုံးကို retrieve လုပ်ဖို့အတွက် SELECT * FROM table ဆိုတဲ့ query ကို အသုံးပြုခဲ့ပါတယ်။ ကျွန်တော်တို့က တစ်ခါတစ်ရံမှာ အဲ့ဒီ information အားလုံးကို မယူချင်ဘဲ small subset of
        information တစ်ခုပဲယူချင်တဲ့အချိန်တွေလည်းရှိပါတယ်။ ဒါဆိုရင် table တစ်ခုထဲကနေ လိုချင်တဲ့ information အချို့ကိုပဲ ထုတ်ကြည့်ရအောင်။ ကျွန်တော်တို့ အပေါ်မှာသုံးခဲ့တဲ့ asterisk or * ဟာ table ထဲမှာ ပေးထားတဲ့ column တွေအားလုံးကို ရည်ညွှန်းတာဖြစ်ပါတယ်။
        အခု ကျွန်တော်တို့ example ထဲက author နဲ့ပတ်သတ်တဲ့ information တွေကိုပဲ ထုတ်ချင်တယ်ဆိုရင်တော့ ကျွန်တော်တို့ table ထဲက author ဆိုတဲ့ column name ကို asterisk (*) ရဲ့နေရာမှာထည့်ပေးရပါမယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့က column နှစ်ခုကို ထုတ်ချင်တယ်ဆိုရင်တော့
        အဲ့ဒီထုတ်ချင်တဲ့ column နှစ်ခုကို SELECT ရဲ့နောက်မှာ comma(,) ခံပြီး ရေးပေးရမှာဖြစ်ပါတယ်။ အဲ့ဒီမှာ တစ်ခုကောင်းတာက table ထဲမှာရှိတဲ့ column data တွေကို ကျွန်တော်တို့ လိုချင်တဲ့ column အတိုင်းဖြစ်အောင် ရှေ့နောက်ပြောင်းရေးလို့ရပါတယ်။ ပြောချင်တာက
        author column ကို အရင်မထုတ်ဘဲ Price column ပြီးမှ author column ကို ထုတ်ချင်တဲ့ သဘောမျိုးပါ။ Example ကိုကြည့်ရအောင်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            // How to Write? => SELECT &lt;column-names&gt; FROM &lt;table-name&gt;;

            SELECT Author FROM Books;
            SELECT Author, Price FROM Books;
            SELECT Price, Author FROM Books;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql1.png" alt="MySQL Screenshot Image">
    </div>

    <hr>


    <h2>Categorizing Output with 'AS'</h2>
    <p>ကျွန်တော်တို့အနေနဲ့ table တစ်ခုရဲ့ content တွေကို querying လုပ်ခြင်းဟာ results တွေကို နည်းလမ်းအမျိုးမျိုးနဲ့ ရနိုင်တယ်ဆိုတာကို သိထားရပါမယ်။ အဲ့ဒီ database ထဲက results တွေဟာ လူတွေ read လုပ်နိုင်ဖို့အတွက် design လုပ်ထားတာဖြစ်ပါတယ်။ ဒါပေမယ့် တစ်ခါတစ်ရံမှာ
        column names တွေဟာ ကိုယ်နဲ့ friendly မဖြစ်ဘဲ ဘာကိုဖော်ပြသလဲဆိုတာကို နားမလည်နိုင်တာမျိုးတေ ရှိတတ်ပါတယ်။ ပြောချင်တာက ကျွန်တော်တို့ table မှာဆိုရင် Author ကို word တစ်ခုအနေနဲ့သာလျှင် ရေးထားတာဖြစ်ပြီး ကျွန်တော်တို့က capital letters တွေချည်းပဲ လိုချင်တယ်ဆိုရင်တော့
        AS ဆိုတဲ့ keyword ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ အသုံးပြုနည်းကတော့ ကျွန်တော်တို့ capitalize လုပ်ချင်တဲ့ column names တွေတစ်ခုချင်းစီရဲ့နောက်မှာ AS ဆိုတဲ့ keyword လိုက်ပြီး ကိုယ်ပြောင်းချင်တဲ့ capital word ကို AS ရဲ့နောက်မှာ ရေးရမှာဖြစ်ပါတယ်။ SQL queries
        တွေရေးတဲ့အခါမှာ multiple words တွေကို အသုံးပြုလို့မရပါဘူး။ တစ်ကယ်လို့သူတို့ကိုအသုံးပြုချင်တယ်ဆိုရင်တော့ SQL မှာဆိုရင် double quote ("") ကို အသုံးပြုရပါတယ်။ တစ်ခုသိထားရမှာက SQL, or PostgreSQL ကဲ့သို့ အမျိုးမျိုးသော မှာ aliases (နာမည်ပွား) တွေအတွက်
        မတူညီတဲ့ punctuation တွေရှိပါတယ်။ အချို့က single quotes ထည့်ပေးရတယ်၊ အချို့က double quotes ထည့်ပေးရပြီး အချို့ဆိုရင် square brackets တွေတောင် ထည့်ပေးရပါတယ်။ ဒါဟာ ကျွန်တော်တို့ table ထဲက column name ကို လိုချင်တဲ့ပုံစံလေးကိုပဲ ထုတ်တာဖြစ်ပြီး အမှန်တကယ်
        database ထဲက table column name ကတော့ ပြောင်းလဲသွားမှာ မဟုတ်ပါဘူး။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            //How to Write? => SELECT &lt;column-name&gt; AS &lt;new-name&gt; FROM &lt;table-name&gt;;
            
            SELECT * FROM Books;
            SELECT Author AS AUTHOR, first_published AS "FIRST PUBLISHED" FROM Books;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql2.png" alt="MySQL Screenshot Image">
    </div>
    <hr>


    <h2>Searching Table with WHERE</h2>
    <p>ကျွန်တော်တို့ဟာ table တစ်ခုထဲကနေ information အားလုံးကိုဆွဲထုတ်ဖို့အတွက် SELECT &lt;columns&gt; FROM &lt;table&gt;; ဆိုတဲ့ syntax ကိုအသုံးပြုရမယ်ဆိုတာ မှတ်ထားရပါမယ်။ ဒါပေမယ့် အဲ့ဒါတင်မဟုတ်ဘဲ SELECT statement ကိုအသုံးပြုပြီး နောက်ထပ်အများကြီးပြုလုပ်လို့ရပါသေးတယ်။
        ကျွန်တော်တို့အနေနဲ့ WHERE clause တစ်ခုကိုသုံးပြီး ကျွန်တော်တို့လိုချင်တဲ့ information တွေကို retrieve လုပ်ဖို့အတွက် search လုပ်နိုင်ပါတယ်။ ကျွန်တော်တို့ search လုပ်ချင်တဲ့အရာကို WHERE clause ရဲ့နောက်မှာ condition တစ်ခုနဲ့ရေးပြီး ရှာရမှာဖြစ်ပါတယ်။
        အခု condition တွေဘယ်လိုအလုပ်လုပ်လဲ ကြည့်ရအောင်။ ပထမဆုံး ကျွန်တော်တို့မှာ &lt;column&gt; ရှိမယ်၊ ပြီးနောက် &lt;operator&gt; လို့ခေါ်တဲ့ special character or set of characters တွေပါမယ်။ နောက်ဆုံးမှာတော့ &lt;value&gt; ရှိပါမယ်။ Equal sign ကိုတော့
        column name နဲ့ သူ့ထဲက value ညီတဲ့ကောင်ကို ထုတ်မယ်ဆိုတဲ့ အချိန်မျိုးမှာသုံးပါတယ်။ ဥပမာ- WHERE Author = "Ei Maung"; ဆိုရင် Ei Maung နဲ့ညီတဲ့အရာတွေကို select လုပ်လိုက်တဲ့ သဘောပါပဲ။ SQL မှာဆိုရင် equal sign က case sensitive ဖြစ်ပါတယ်။ အခြား language
        တွေမှာတော့ double equal ကို ညီရင်ဆိုတဲ့နေရာတွေမှာ သုံးကြပါတယ်။ SQL မှာက equal sign တစ်ခုတည်းသာလျှင်ဖြစ်ပါတယ်။ Id က row entry အတွက် table ထဲမှာရှိတဲ့ unique identifier တစ်ခုဖြစ်ပါတယ်။ လူတွေက database design လုပ်တဲ့အခါ table တစ်ခုနဲ့တစ်ခု ချိတ်တဲ့အချိန်မှာ
        ID ကိုအသုံးပြုကြပါတယ်။ ဒါကိုကျွန်တော်တို့က foreign key လို့ခေါ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            //How to Write? => SELECT &lt;columns&gt; FROM &lt;table-name&gt; WHERE &lt;condition&gt;

            SELECT * FROM Books;
            SELECT * FROM Books WHERE first_published = 1997;
            SELECT Author, Name FROM Books WHERE Price = 15000;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql3.png" alt="MySQL Screenshot Image">
    </div>
    <hr>


    <h2>Filtering by Comparing Values</h2>
    <p>SQL ဟာ တိကျတဲ့ matches တွေကို filtering or finding လုပ်ဖို့အတွက် အသုံးပြုရုံသာမက သူ့ကို relational operators တွေသုံးပြီး values တွေကို compare လုပ်ဖို့အတွက်လည်း အသုံးပြုနိုင်ပါတယ်။ Relational operators တွေရဲ့ name ဟာ values နှစ်ခုရဲ့ ဆက်နွယ်မှုကနေ
        compare လုပ်တဲ့အခါ သူတို့ရဲ့ usage ကနေ ဆင်းသက်လာတာဖြစ်ပါတယ်။ အဲ့ဒီ operators တွေကို SQL မှာသာမက programming languages အများစုမှာ တွေ့နိုင်ပါတယ်။ အခု ကျွန်တော်တို့သိပြီးသား operators တွေကို ပြန်နွေးကြည့်ရအောင်။ The equality or ( = ) ဟာ value နှစ်ခုရဲ့
        quality ကို compare လုပ်တာဖြစ်ပါတယ်။ The inequality or ( != ) ကတော့ value နှစ်ခုကို compare လုပ်ပြီး သူတို့နှစ်ခု match မဖြစ်မှ condition က true ဖြစ်မှာပါ။ Less than operator (
        <) ဟာ left angle bracket နဲ့ ကိုယ်စားပြုပါတယ်။ Operators အားလုံးဟာ left to right အနေနဲ့ read လုပ်ပါတယ်။ တစ်ကယ်လို့ operator ရဲ့ left-hand side မှာရှိတဲ့ value က operator ရဲ့ right-hand side မှာရှိတဲ့ value ထက် smaller ဖြစ်နေရင် condition က true ဖြစ်မှာဖြစ်ပါတယ်။
            တစ်ကယ်လို့ (<) condition ကိုမှ value နှစ်ခုက equal ဖြစ်နေရင် condition က false ဖြစ်မှာဖြစ်ပါတယ်။ နောက်တစ်ခုက ဥပမာ 1 < 40 ဆိုရင် condition ထဲမှာ 40 ထိမပါဘဲ 39 ထိပဲပါနေပါလိမ့်မယ်။ 40 အထိပါချင်တယ်ဆိုရင်တော့ less than equal ( <=) ဆိုတဲ့ operator ကိုသုံးရမှာဖြစ်ပါတယ်။
            e.g ( 1 <=4 0, 40 <=4 0 ) ။ Right angle bracket (>, =>) ကလည်း ထို့အတူပါပဲ။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            //How to Write? => SELECT &lt;column&gt; FROM &lt;table&gt; WHERE &lt;col-name&gt; &lt;opertor&gt; &lt;col-value&gt;

            SELECT * FROM Books;
            SELECT * FROM Books WHERE first_published > 1997;
            SELECT * FROM Books WHERE first_published >= 1997;
            SELECT * FROM Books WHERE first_published < 1998;
            SELECT * FROM Books WHERE first_published <= 1998;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql4.png" alt="MySQL Screenshot Image">
    </div>
    <hr>


    <h2>Filtering on More than One Condition</h2>
    <p>ကျွန်တော်တို့ WHERE ရဲ့နောက်မှာ condition တစ်ခုတည်းသုံးပြီး table ထဲက data ကိုထုတ်ခဲ့ပြီးပါပြီ။ အခု WHERE ရဲ့နောက်မှာ condition တစ်ခုထက်ပိုပြီး ထည့်ကြည်ံ့ရအောင်။ ကျွန်တော်တို့က condition တစ်ခုထက်ပိုလာပြီးဆိုရင် အဲ့ဒီ condition တွေကြားကို AND (သို့)
        OR ဆိုတဲ့ operator တစ်ခုခုကို ထည့်ပေးရပါတယ်။ အောက်က example ကို တစ်ချက်ကြည့်ရအောင်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT &lt;columns&gt; FROM &lt;table&gt; WHERE &lt;condition 1&gt; AND &lt;condition 2&gt;;
                             SELECT &lt;columns&gt; FROM &lt;table&gt; WHERE &lt;condition 1&gt; OR &lt;condition 2&gt;;

            SELECT Author, Name FROM Books WHERE Price = 12000 AND first_published = 1997;
            SELECT Author, Name FROM Books WHERE Price = 12000 OR first_published < 1996;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql5.png" alt="MySQL Screenshot Image">
    </div>
    <hr>


    <h2>Filtering by Dates</h2>
    <p>အခု ကျွန်တော်တို့သုံးနေတဲ့ comparison operators တွေကို date types တွေနဲ့လည်း သုံးလို့ရပါသေးတယ်။ ကျွန်တော်တို့ loans table ထဲက December 13th 2015 မတိုင်ခင်မှာ ဘာတွေရှိခဲ့လဲဆိုတာ သိချင်ရင် သူ့ကို WHERE clause ထဲမှာ &lt;column&gt; &lt;operator&gt; &lt;value&gt;
        ဆိုပြီး စစ်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT * FROM &lt;table&gt; WHERE &lt;column&gt; &lt;operator&gt; &lt;value&gt;;

            SELECT * FROM loans WHERE lone_on < "2015-12-13";
            SELECT * FROM loans WHERE return_by > "2015-12-18";
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql6.png" alt="MySQL Screenshot Image">
    </div>

    <hr>


    <h2>Searching within a Set of Values</h2>
    <p>ကံကောင်းစွာနဲ့ပဲ SQL ဟာ ကျွန်တော်တို့ကို multiple values တွေ compare လုပ်နိုင်ဖို့အတွက် IN ဆိုတဲ့ keyword ကိုအသုံးပြုဖို့ ခွင့်ပြုပေးထားပါတယ်။ သူရဲ့ရေးနည်းဖြစ်တဲ့ syntax ကိုတော့ အောက်မှာပြထားပါတယ်။ WHERE keyword ရဲ့နောက်မှာ ကျွန်တော်တို့ compare လုပ်ချင်တဲ့
        values တွေရှိတဲ့ column ကို ရေးရမှာဖြစ်ပြီး သူ့နောက်မှာတော့ IN ဆိုတဲ့ keyword နဲ့အတူ နောက်မှာ parenthesis လိုက်ပြီးတော့ အဲ့ဒီ parenthesis ထဲမှာ ကျွန်တော်တို့ check လုပ်ချင်တဲ့ values တွေကို comma ခံပြီးရေးပေးရမှာဖြစ်ပါတယ်။ တစ်ကယ်လို့ကျွန်တော်တို့က
        IN နဲ့စစ်ထားတဲ့ values တွေကလွဲလို့ ကျန်တဲ့ values တွေအကုန်လုံးကို လိုချင်ပါတယ်ဆိုရင်တော့ NOT IN ဆိုတဲ့ keyword ကိုထည့်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT &lt;column&gt; FROM &lt;table&gt; WHERE &lt;condition 1&gt; OR &lt;condition 2&gt; OR &lt;condition 3&gt;;

            SELECT first_name, email FROM patrons WHERE library_id = "MCL1001" OR library_id = "MCL1100" OR library_id = "MCL1011";
            SELECT first_name, email FROM patrons WHERE library_id IN ("MCL1001", "MCL1100", "MCL1011");
            SELECT first_name, email FROM patrons WHERE library_id NOT IN ("MCL1001", "MCL1100", "MCL1011");
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql7.png" alt="MySQL Screenshot Image">
    </div>
    <hr>


    <h2>Searching Within a Range of Values</h2>
    <p>ပြီးခဲ့တဲ့သင်ခန်းစာမှာ ကျွန်တော်တို့အနေနဲ့ IN နဲ့ NOT IN ဆိုတဲ့ keyword ကိုသုံးပြီးတော့ queries တွေကို complexity ဖြစ်နေတာကို reduce လုပ်ပြီးရေးခဲ့ပါတယ်။ ကျွန်တော်တို့ဟာ OR ခံပြီးရေးထားတဲ့ multiple conditions တွေကို single condition တစ်ခုဖြစ်အောင်ရေးခဲ့တာ
        ဖြစ်ပါတယ်။ အခုတစ်ခါမှာတော့ ကျွန်တော်တို့ books table ထဲက title နဲ့ author တွေကို 19th century အောက်ကဟာတွေကို range တစ်ခုအနေနဲ့ ယူချင်တယ်ဆိုရင်တော့ SELECT title, author FROM books WHERE first_published >= 1800 AND first_published
        <=1 899; ဆိုပြီးရေးရမှာဖြစ်ပါတယ်။ ဒီလိုမရေးချင်ဘဲ ကျွန်တော်တို့ states တွေကို minimum နဲ့ maximum values တွေသတ်မှတ်ပြီးတော့ သူတို့ကြားက data တွေကိုထုတ်ချင်တယ်ဆိုရင် BETWEEN ဆိုတဲ့ keyword ကို သုံးပေးရမှာဖြစ်ပါတယ်။ ရေးနည်းကတော့ WHERE clause ရဲ့နောက်မှာ
            ကျွန်တော်တို့ range သတ်မှတ်မယ့် column name ကိုရေးရမှာဖြစ်ပြီး သူ့နောက်မှာတော့ BETWEEN ဆိုတဲ့ keyword လိုက်ပါတယ်။ နောက်ဆုံးမှာတော့ range သတ်မှတ်ချင်တဲ့ value နှစ်ခုကို AND ဆိုတဲ့ operator ခံပြီး ရေးပေးရမှာဖြစ်ပါတယ်။ BETWEEN ကို numeric values
            တွေအတွက်လည်းအသုံးပြုပါတယ်။ တစ်ခါတစ်ရံမှာ date ranges တွေအတွက်ပါ အသုံးပြုနိုင်ပါတယ်။ BETWEEN ကိုသုံးခြင်းအားဖြင့် ကျွန်တော်တို့က values တွေရဲ့ range ကို operators တွေသုံးပြီး စဉ်းစားစရာမလိုဘဲ range တစ်ခုသာလျှင်သတ်မှတ်ပြီး လိုချင်တဲ့ data ကို ဆွဲထုတ်လို့ရပါတယ်။
    </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT &lt;table&gt; WHERE &lt;column&gt; BETWEEN &lt;minimum&gt; AND &lt;maximum&gt;;

            SELECT title, author FROM books WHERE first_published >= 2000 AND first_published <= 2020;

            SELECT * FROM books WHERE first_published BETWEEN 2000 AND 2020;
            SELECT * FROM loans WHERE loned_on BETWEEN "2015-12-13" AND "2015-12-19";
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql8.png" alt="MySQL Screenshot Image">
    </div>
    <hr>


    <h2>Finding Data that Matches a Pattern</h2>
    <p>အခု ကျွန်တော်တို့သုံးနေတဲ့ conditions တွေဟာ တစ်ကယ်ကို specific ဖြစ်ပါတယ်။ Exact matches တွေရှာဖို့အတွက် quality operator (=) လိုမျိုးပေါ့။ ပြီးတော့ inequality operator (!=) ကိုသုံးပြီး exact matches တွေကို filter လုပ်တာမျိုးပါ။ ဒါပေမယ့် အခုကျွန်တော်တို့က
        ဆရာ Ei Maung ရေးထားတဲ့ စာအုပ်တွေအားလုံးကို လိုချင်တယ်ဆိုပါစို့။ ပုံမှန်အားဖြင့်ဆိုရင် name = "Ei Maung"; ဆိုပြီးထုတ်ပြပါတယ်။ ဒါပေမယ့်ကျွန်တော်တို့က Ei Maung နဲ့ပတ်သတ်တဲ့ စာအုပ်တွေအကုန်လိုချင်တဲ့အတွက်ကြောင့် euqality (=) operator အစား LIKE
        ဆိုတဲ့ keyword ကိုအသုံးပြုပေးရမှာ ဖြစ်ပါတယ်။ LIKE ဆိုတဲ့ keyword ကိုသုံးရုံနဲ့တင် result ကိုရလာမှာ မဟုတ်သေးပါဘူး။ ဘာလို့လဲဆိုရင် LIKE keyword မှာ အနည်းဆုံး wildcard တစ်ခုလိုအပ်လို့ပဲဖြစ်ပါတယ်။ Wildcard ဆိုတာ ကျန်ရှိနေတဲ့ text ကိုမသိတဲ့အခါမှာ
        အသုံးပြုရတဲ့ substitute character (အစားထိုး စကားလုံး) တစ်ခုဖြစ်ပါတယ်။ သူကတော့ ကြိုက်တဲ့နေရာမှာ ရှိနေတဲ့ ဘယ် string ကိုမဆို ရှာနိုင်ပါတယ်။ SQL မှာဆိုရင် percent sign (%) ဟာ any number of characters ဖြစ်ပြီး zero တောင် ပါပါတယ်။ % ကို name
        ရဲ့ ရှေ့မှာရော နောက်မှာရော ထားခြင်းက စာလုံးကိုအတိအကျရှာပေးတာဖြစ်ပြီး ၊ % ဟာ capital letters တွေကို ignore လုပ်ပေးပါတယ်။ LIKE ကိုသုံးရတဲ့ အဓိက point ကတော့ ထုတ်ချင်တဲ့ data က spelling တော့သိတယ် ၊ capitalization ကိုမသိဘူးဖြစ်နေတဲ့အချိန်မျိုးမှာ
        ကူညီပေးနိုင်လို့ပဲဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT &lt;column&gt; FROM &lt;table&gt; WHERE &lt;column&gt; LIKE "%name%";

            SELECT Name, Author FROM books WHERE Author LIKE "ei maung%";
            SELECT Name, Author FROM books WHERE Author LIKE "%ei maung";
            SELECT Name, Author FROM books WHERE Author LIKE "%ei%";
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql9.png" alt="MySQL Screenshot Image">
    </div>
    <hr>


    <h2>Filtering Out or Finding Missing Information</h2>
    <p>ဒီတစ်ခါမှာတော့ ကျွန်တော်တို့က loans table ထဲမှာရှိတဲ့ returned_on ထဲက user ပြန်မပေးရသေးတဲ့ missing ဖြစ်နေတဲ့ data တွေကို finding လုပ်မှာဖြစ်ပါတယ်။ ဒီလိုလုပ်ဖို့အတွက် ပုံမှန်ရေးမယ်ဆိုရင်တော့ SELECT * FROM loans WHERE returned_by > "2015-12-19"
        AND returned_on = ; ဆိုပြီး returned_on ကို သူ့ထဲမှာဘာမှမရှိဘူးဆိုပြီး ဒီအတိုင်းထားရေးလိုက်မယ်ဆိုရင် syntax error တစ်ခုတက်လာမှာဖြစ်ပါတယ်။ အဲ့ဒီ ပြသနာအတွက် SQL မှာ missing value ကို ဖော်ပြနိုင်တဲ့ special way တစ်ခုရှိပြီး အဲ့ဒါကတော့ NULL
        ပဲဖြစ်ပါတယ်။ Missing value ဆိုတာ NULL value တစ်ခုပါပဲ။ ဒါပေမယ့် သူ့ကိုသုံးမယ်ဆိုရင်တော့ equality operator (=) နဲ့သုံးလို့မရပါဘူး။ NULL ကိုရေးဖို့အတွက် conjunction အနေနဲ့ IS ဆိုတဲ့ keyword ကိုအသုံးပြုရပါမယ်။ ဒါဆိုရင်တော့ ကျွန်တော်တို့ loans
        table ထဲက return မလုပ်ရသေးတဲ့ data မှန်သမျှကို ရလာမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့က return လုပ်ထားတဲ့ data ကိုဆွဲထုတ်ကြည့်ချင်တယ်ဆိုရင်တော့ IS NOT NULL ကိုအသုံးပြုရမှာ ဖြစ်ပါတယ်။ IS NULL ဆိုရင် value မရှိတဲ့ data တွေကိုထုတ်ပေးပြီးတော့ IS NOT
        NULL ဆိုရင်တော့ value ရှိနေတဲ့ data တွေကိုပဲ ထုတ်ပေးမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            How to Write? => SELECT &lt;column&gt; FROM &lt;table&gt; WHERE &lt;column&gt; IS NULL;
                             SELECT &lt;column&gt; FROM &lt;table&gt; WHERE &lt;column&gt; IS NOT NULL;

            SELECT * FROM loans WHERE return_by > "2015-12-18" AND return_on IS NULL;
            SELECT * FROM loans WHERE return_by > "2015-12-18" AND return_on IS NOT NULL;
            SELECT first_name, email FROM patrons WHERE id = 1;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql10.png" alt="MySQL Screenshot Image">
    </div>
    <hr>


    <h2>Review Practice with SQL Playground</h2>
    <p>ကျွန်တော်တို့အနေနဲ့ data တွေကို နည်းလမ်းအမျိုးမျိုးနဲ့ ဘယ်လို filter & search လုပ်ရမလဲဆိုတာကို လေ့လာခဲ့ပြီးပါပြီ။ Filtering လုပ်ဖို့အတွက် general pattern ဖြစ်တဲ့ SELECT &lt;columns&gt; FROM &lt;table&gt; WHERE &lt;condition&gt; ဆိုပြီး WHERE
        keyword ရဲ့နောက်မှာ condition တစ်ခုလိုက်ပြီး လိုချင်တဲ့ data ကိုယူခဲ့ပါတယ်။ အဲ့ဒါတင်မဟုတ်ဘဲ AND နဲ့ OR operator တွေကိုသုံးပြီး multiple conditions တွေနဲ့ data ကို ဆွဲထုတ်လို့ရပါသေးတယ်။ AND ကတော့ ကျွန်တော်တို့သိထားတဲ့အတိုင်း condition အားလုံးမှန်မှ
        true ဖြစ်မှာဖြစ်ပြီး OR ကတော့ condition တစ်ခုမှန်ရုံနဲ့ true ဖြစ်သွားမှာဖြစ်ပါတယ်။ Common condition တစ်ခုဖြစ်တဲ့ Values တွေကို compare လုပ်ဖို့အတွက် operator တွေကိုအသုံးပြုရတဲ့ condition လည်းရှိပါတယ်။ အဲ့ဒီ operators တွေကတော့ =, !=,
        <,>,
            <=,>= တို့ပဲဖြစ်ပါတယ်။ ထို့နောက် ကျွန်တော်တို့မှာ IN ဆိုတဲ့ keyword နောက်က parenthesis ထဲမှာ separated လုပ်ထားတဲ့ values တွေကို စစ်တဲ့ condition တစ်ခုလည်းရှိပါတယ်။ အဲ့ဒီ IN keyword ကတော့ column ထဲမှာရှိတဲ့ value က ကျွန်တော်တို့ specify
                လုပ်ထားတဲ့ column ထဲက value နဲ့ match ဖြစ်လားဆိုတာကို စစ်ပေးတာဖြစ်ပါတယ်။ နောက်တစ်ခုကတော့ range တစ်ခုအတွင်းမှာရှိတဲ့ value တွေကို search လုပ်ချင်တယ်ဆိုရင်တော့ BETWEEN ဆိုတဲ့ keyword ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ ထို့နောက် values တွေကို
                search လုပ်ဖို့အတွက် search patterns တွေနဲ့ word cards combinations အတွဲတွေကို LIKE ဆိုတဲ့ keyword နဲ့ ထုတ်နိုင်ပါတယ်။ နောက်ဆုံးတစ်ခုကတော့ SQL မှာ missing ဖြစ်နေတဲ့ values တွေကို ဖော်ပြဖို့အတွက် IS NULL နဲ့ IS NOT NULL တို့ကို
                လေ့လာခဲ့တာဖြစ်ပါတယ်။ အဲ့ဒီမှာ မှတ်ထားရမှာက NULL ကိုသုံးမယ်ဆိုရင် ပုံမှန်သုံးနေကျ equality operator ကိုသုံးလို့မရပါဘူး။ IS or IS NOT ဆိုတဲ့ keyword ကိုပဲ NULL ရဲ့ရှေ့မှာ ထည့်ပေးရမှာဖြစ်ပါတယ်။ ကျွန်တော်တို့ပြောခဲ့သလိုပဲ databases
                တွေအတွင်းမှာရှိတဲ့ data တွေဟာ တစ်ခုနဲ့တစ်ခု related ဖြစ်နေပါတယ်။ ကျွန်တော်တို့ဟာ tables နှစ်ခုလုံးထဲက information တွေကို တစ်ကြိမ်တည်းနဲ့ query လုပ်ပြီး ဆွဲထုတ်နိုင်ပါတယ်။ Table နှစ်ခုကို select လုပ်ဖို့အတွက် FROM ရဲ့နောက်မှာ အဲ့ဒီ
                table name နှစ်ခုကို comma ခံပြီး ရေးပေးရပါမယ်။ ပြီးတော့ table နှစ်ခုရဲ့ relationship ကို WHERE clause မှာ ချိတ်ပေးရမှာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            SELECT * FROM loans, books WHERE loans.book_id = books.id;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/mysql11.png" alt="MySQL Screenshot Image">
    </div>







</body>

</html>