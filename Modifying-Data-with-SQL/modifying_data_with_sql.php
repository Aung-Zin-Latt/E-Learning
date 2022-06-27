<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifying Data with SQL</title>
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
    

    <h2>Introduction to CRUD</h2>
    <p>ကျွန်တော်တို့ဟာ ဘယ် dynamic application တစ်ခုကိုပဲ ဆောက်ဆောက် သူ့မှာအရေးအကြီးဆုံးအပိုင်းကတော့ database တစ်ခုပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ application က e-commerce, sports team, social network site or ကျွန်တော်တို့ phone ထဲက productivity app တွေဖြစ်နေရင်တော့ သူတို့ထဲက data တွေကို အချိန်တိုင်းမှာ လိုအပ်သလို change လုပ်ပေးဖို့ လိုပါတယ်။ ဥပမာ e-commerce site တစ်ခုမှာ ကျွန်တော်တို့က products တွေကို search လုပ်ချင်တယ်၊ stock counts တွေကို update လုပ်မယ်၊ ကျွန်တော်တို့ရဲ့ database ထဲမှာ new orders (သို့) new products တွေကို create လုပ်မယ်၊ မလိုအပ်တော့တဲ့ products အားလုံးကို remove လုပ်မယ် စသဖြင့် operations တွေအများကြီးလုပ်ချင်တယ်ဆိုပါစို့။ ကျွန်တော်တို့ application ဟာ state changes တွေ အချိန်တိုင်းလိုလို ပြုလုပ်ရမှာဖြစ်တဲ့အတွက် dynamic site လို့ သတ်မှတ်လို့ရပါတယ်။ အရှင်းဆုံးပြောရမယ်ဆိုရင် ကျွန်တော်တို့ရဲ့ database တစ်ခုထဲက data တွေပေါ်မှာ လုပ်ဆောင်နိုင်တဲ့ operation 4 ခုရှိပါတယ်။ ပထမဆုံး ကျွန်တော်တို့ database ထဲကို data တွေ create or add လုပ်ပေးရပါတယ်။ ဒုတိယ အနေနဲ့ data တွေကို read လုပ်ပေးရပါမယ်။ Reading မှာဆိုရင် result set တွေကို searching လုပ်တာနဲ့ filtering လုပ်တာတွေပါဝင်ပါမယ်။ တတိယတစ်ခုအနေနဲ့ကတော့ ဘယ် tables တွေထဲကမဆိုရှိနေတဲ့ rows of data တွေကို update or edit လုပ်ပေးဖို့လိုပါတယ်။ နောက်ဆုံး operation တစ်ခုကတော့ data တွေကို remove or delete လုပ်ပေးဖို့ လိုအပ်ပါတယ်။ အဲ့ဒီ Create, Read, Update နဲ့ Delete ဆိုတဲ့ operations တွေကို အတိုကောက်အနေနဲ့ CRUD လို့ ခေါ်ကြတာဖြစ်ပါတယ်။ ဒီသင်ခန်းစာမှာ ကျွန်တော်တို့က database tables တွေထဲမှာရှိတဲ့ rows of data ကို insert, update နဲ့ delete လုပ်တာတွေကို focus ထားပြီး လေ့လာသွားမှာဖြစ်ပါတယ်။ CRUD operations တွေထဲက တစ်ခုချင်းစီမှာလည်း သူနဲ့သက်ဆိုင်တဲ့ SQL keyword တစ်ခုစီရှိကြပါတယ်။ </p>
    <hr>


    <h2>Adding a Row to a Table</h2>
    <p>အစောက ပြောခဲ့သလိုပဲ CRUD operation တစ်ခုစီမှာ သူ့ရဲ့ ကိုယ်ပိုင် SQL keyword တွေရှိပါတယ်။ ကျွန်တော်တို့ရဲ့ database ထဲက data တွေကို read လုပ်ချင်တဲ့အခါ SELECT ကို အသုံးပြုတယ်ဆိုတာကို သိပြီးသားဖြစ်မှာပါ။ Row တစ်ခုကို create လုပ်ဖို့အတွက် INSERT ဆိုတဲ့ keyword ကို အသုံးပြုပါတယ်။ အခု table တစ်ခုထဲကို data ဘယ်လို insert လုပ်လဲကြည့်ရအောင်။ Table ထဲကို data insert လုပ်မယ်ဆိုရင်တော့ INSERT INTO &lt;table&gt; ဆိုပြီး ရေးပေးရမှာဖြစ်ပါတယ်။ ဒါဟာ particular table ထဲကို insert လုပ်တဲ့နည်းပဲဖြစ်ပါတယ်။ ထို့နောက် VALUES ဆိုတဲ့ keyword နဲ့ သူ့နောက်မှာ table ထဲကိုထည့်ချင်တဲ့ values တွေကို comma ခံပြီး သူတို့အားလုံးကို parenthesis နဲ့ surround လုပ်ပေးရပါတယ်။ Table တစ်ခုမှာ အရင်ဆုံးလာလေ့ရှိတာက ID ဖြစ်ပြီးတော့ အဲ့ဒီ ID တွေဟာ unique ဖြစ်နေပါတယ်လို့ယူဆပါတယ်။ ပြီးတော့ ID တွေကို table ထဲက particular row တစ်ခုအတွက် reference တစ်ခုအဖြစ် အသုံးပြုကြပါတယ်။ ဒါကြောင့် ကျွန်တော်တို့ ID ကို conflicts ဖြစ်တာတွေကနေ ရှောင်ရှားဖို့အတွက် AUTO INCREMENT ဆိုတဲ့ feature တစ်ခုကို အသုံးပြုပေးရပါတယ်။ AUTO INCREMENT ဟာ latest ID ကို generate လုပ်ပေးပါတယ်။ Database tables အများစုမှာတော့ ID ပါတဲ့ column ကို auto increment feature ကို switch on လုပ်ထားလေ့ရှိပါတယ်။ တစ်ကယ်လို့ ကျွန်တော်တို့ ID နေရာမှာ NULL လို့ထည့်ခဲ့မယ်ဆိုရင်တောင် AUTO INCREMENT လုပ်ထားတာကြောင့် latest ID ကို increment လုပ်သွားမှာဖြစ်ပါတယ်။ Database ထဲက table တစ်ခုထဲကို data တွေ insert လုပ်တဲ့ နောက်ထပ် နည်းလမ်းတစ်ခုရှိပါသေးတယ်။ အဲ့ဒါကတော့ INSERT INTO &lt;table&gt; ရဲ့နောက်မှာ ကိုယ်သတ်မှတ်ချင်တဲ့ &lt;column&gt; ရေးပြီးတော့ သူ့နောက်မှာ VALUES ဆိုတဲ့ keyword နဲ့ သူ့နောက်မှာ အစောက column တွေနဲ့ match လုပ်ပြီး ထည့်ပေးမယ့် values တွေကို အတိအကျ ရေးပေးရမှာဖြစ်ပါတယ်။ ဆိုလိုတာက column သုံးခုထည့်ထားရင် value ကိုလည်း သုံးခုပဲ အတိအကျ ထည့်ပေးရပါမယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            <strong>How to Write? => INSERT INTO &lt;table&gt; VALUES (&lt;value 1&gt;, &lt;value 2&gt;, ...);
                             INSERT INTO &lt;table&gt; (&lt;column 1&gt;, &lt;column 2&gt;) VALUES (&lt;value 1&gt;, &lt;value 2&gt;);</strong>
                            
            INSERT INTO books VALUES (7, "Fiction", "George Orwell", 3000, 2020);
            INSERT INTO loans (patron_id, loned_on, book_id, return_by) VALUES (4, "2015-12-14", 2, "2015-12-21");
        </code>
    </pre>
    <div class="img-size">
        <img src="images/insert-single.png" alt="Adding a row image">
    </div>
    <hr>


    <h2>Adding Multiple Rows to a Table</h2>
    <p>ကျွန်တော်တို့ဟာ database တစ်ခုကနေ information တွေကို read လုပ်တာနဲ့ writing queries တွေပြုလုပ်တဲ့ အချိန်မှာ ပုံမှန်အားဖြင့် query တစ်ခုချင်းစီကို လိုက်ထည့်နေရပါတယ်။ ကျွန်တော်တို့ table ထဲကို multiple rows တွေထည့်ချင်တဲ့အခါမျိုးမှာဆိုရင် VALUES ဆိုတဲ့ keyword နောက်မှာ ထည့်ချင်တဲ့ rows တွေကို parenthesis ထဲမှာရေးပြီး အဲ့ဒီ parenthesis တစ်ခုစီကို comma ခံပြီး ရေးပေးရပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            <strong>How to Write? => INSERT INTO VALUES (&lt;value 1&gt;, &lt;value 2&gt;,...), (&lt;value 1&gt;, &lt;value 2&gt;,...), (...), (...);</strong>

            SELECT * FROM books;
            INSERT INTO books VALUES (8, "The Circle", "Dave Eggers", 4500, 2013),
                                     (9, "Contact", "Carl Sagan", 7000, 1985),
                                     (10, "Animal Farm", "George Orwell", 2000, 1945);
        </code>
    </pre>
    <div class="img-size">
        <img src="images/insert-multiple.png" alt="Adding multiple rows image">
    </div>
    <hr>


    <h2>Updating All Rows in a Table</h2>
    <p>ကျွန်တော်တို့ဟာ table ထဲကို data တွေထည့်ဖို့ INSERT ဆိုတဲ့ keyword ကို အသုံးပြုခဲ့ပြီး table ထဲက data တွေကို read လုပ်ဖို့အတွက် SELECT ဆိုတဲ့ keyword ကိုအသုံးပြုခဲ့တာဖြစ်ပါတယ်။ အခု ကျွန်တော်တို့ table ထဲက data တွေကို ပြောင်းလဲချင်ရင်တော့ UPDATE ကိုအသုံးပြုရမှာဖြစ်ပါတယ်။ UPDATE statement ကိုရေးဖို့ဆိုရင် UPDATE &lt;table&gt; SET &lt;column&gt; = &lt;value&gt; ဆိုတဲ့ ရေးနည်းနဲ့ ရေးပေးရတာဖြစ်ပါတယ်။ SET ရဲ့နောက်မှာတော့ ကျွန်တော်တို့ update လုပ်ချင်တဲ့ column နဲ့ value ကို equal sign နဲ့ရေးပေးရမှာဖြစ်ပါတယ်။ နောက်တစ်ခုကျန်သေးတာက WHERE clause ပဲဖြစ်ပါတယ်။ WHERE clause ထဲမှာတော့ ကျွန်တော်တို့ဟာ table ထဲက ဘယ် column က ဘာနဲ့ညီတဲ့ကောင်နေရာမှာ update လုပ်ပါမယ်ဆိုတဲ့ condition ကိုရေးပေးရတာဖြစ်ပါတယ်။ UPDATE statement မှာရှိတဲ့ equal sign ကို assignment operator လို့လည်း သတ်မှတ်ပါတယ်။  ပေးထားတဲ့ column name ထဲက  ရှိပြီးသား value ထဲကို new value ထည့်လိုက်တာဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            <strong>How to Write? => UPDATE &lt;table&gt; SET &lt;column&gt; = &lt;value&gt;;
                             UPDATE &lt;table&gt; SET &lt;column&gt; = &lt;value&gt;, &lt;column&gt; = &lt;value&gt;;</strong>

            SELECT * FROM patrons;
            UPDATE patrons SET last_name = "Anonymous";
            UPDATE patrons SET email = "anon@gmail.com", zip_code = 5555;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/update.png" alt="Updating all rows image">
    </div>
    <hr>


    <h2>Updating Specific Rows</h2>
    <p>အခု ကျွန်တော်တို့ဟာ table တစ်ခုအတွင်းမှာရှိတဲ့ entries တွေအားလုံးကို change လုပ်ပါမယ်။ ကျွန်တော်တို့အနေနဲ့ specific rows တွေကို ဘယ်လို target လုပ်ရမလဲဆိုရင် UPDATE statement ကနေ စရေးရပါမယ်။ ကျွန်တော်တို့ လိုချင်တဲ့ row တစ်ခုကိုပဲ UPDATE လုပ်ချင်တယ်ဆိုရင် ဘယ်လိုလုပ်ရမလဲ?။ ဒီလိုလုပ်ဖို့ဆိုရင်တော့ ကျွန်တော်တို့ အပေါ်မှာသုံးခဲ့တဲ့ SELECT statement လိုပဲ ကျွန်တော်တို့ဟာ WHERE clause ကို အသုံးပြုနိုင်ပါတယ်။ UPDATE statement မှာ WHERE condition ကိုထည့်ပေးရပါမယ်။ ဒီတစ်ခါမှာတော့ rows တွေကို read လုပ်မယ့်အစား ကျွန်တော်တို့ WHERE clause ထဲမှာ စစ်ထားတဲ့ criteria နဲ့ match ဖြစ်တဲ့ row ကိုပဲ update လုပ်သွားမှာဖြစ်ပါတယ်။ Conditions တွေဟာ shapes အမျိုးမျိုး၊ sizes အမျိုးမျိုးနဲ့လာပါတယ်။ တစ်ချို့မှာ quality, in-equality, greater than or less than ဆိုတဲ့ operators တွေရှိပါတယ်။ Sets of values တွေကို search လုပ်ဖို့ IN keyword ကိုအသုံးပြုတယ်။ ပြီးတော့ ranges တွေအတွင်းမှာ values တွေကိုရှာချင်တဲ့အခါမှာ BETWEEN ဆိုတဲ့ keyword ကို အသုံးပြုနိုင်ပါတယ်။ နောက်ပြီး patterns of characters တွေကို search လုပ်ဖို့ LIKE ဆိုတဲ့ keyword ကို အသုံးပြုကြပါတယ်။ ကျွန်တော်တို့ဟာ လိုချင်တဲ့ data အပေါ် အခြေခံပြီးတော့ ကျွန်တော်တို့ construct လုပ်လိုက်တဲ့ ဘယ် condition ကိုမဆိုမူတည်ပြီး multiple rows တွေကို update လုပ်နိုင်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            <strong>How to Write? => UPDATE &lt;table&gt; SET &lt;column&gt; = &lt;value&gt; WHERE &lt;condition&gt;;</strong>

            SELECT * FROM books;
            UPDATE books SET Name = "Peaky Blinders", Author = "Thomus Shalby" WHERE id = 10;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/update-specific.png" alt="Update specific rows image">
    </div>
    <hr>


    <h2>Removing Data from All Rows in a Table</h2>
    <p>ကျွန်တော်တို့မှာ create, read, update နဲ့ delete ဆိုပြီး CRUD operations လေးခုရှိပါတယ်။ အဲ့ဒီထဲမှာ အခုပြောပြမှာကတော့ delete ပဲဖြစ်ပါတယ်။ DELETE ဟာလည်း UPDATE လိုပါပဲ။ ကျွန်တော်တို့ဟာ delete statement ကိုရေးမယ်ဆိုရင် DELETE ဆိုတဲ့ keyword နဲ့ သူ့နောက်က FROM ရယ်၊ &lt;table&gt; ရယ်ဆိုပြီး လိုက်ပါတယ်။ DELETE keyword ဟာ table တစ်ခုအတွင်းမှာ rows တွေကို remove လုပ်ပေးတာဖြစ်ပါတယ်။ ကျွန်တော်တို့ table ထဲက rows တွေကို delete လုပ်လိုက်မယ်ဆိုရင်တော့ delete လုပ်လိုက်တဲ့ data တွေကို undo လုပ်လို့မရသလို ကျွန်တော်တို့ data ကို backup လုပ်မထားဘဲနဲ့လည်း restore လုပ်လို့မရပါဘူး။ ဒါကတော့ DELETE statement မှာ မှတ်ထားရမယ့် အပိုင်းဖြစ်ပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            <strong>How to Write? => DELETE FROM &lt;table&gt;;</strong>

            SELECT * FROM books;
            DELETE FROM books;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/delete.png" alt="Removing Data image">
    </div>
    <hr>


    <h2>Removing Specific Rows</h2>
    <p>ကျွန်တော်တို့ဟာ များသောအားဖြင့် table ထဲက rows တွေအားလုံးကို remove လုပ်မယ့်အစား ကိုယ် remove လုပ်ချင်တဲ့ specific rows တွေကိုပဲ remove လုပ်ချင်တဲ့အခါမှာဆိုရင် DELETE statement မှာပဲ WHERE clause ရဲ့နောက်မှာ remove လုပ်ချင်တဲ့ condition ကို ထည့်ပေးရမှာဖြစ်ပါတယ်။ WHERE နောက်က condition တွေဟာ shapes အမျိုးမျိုး၊ sizes အမျိုးမျိုးနဲ့ လာတာဖြစ်သလို ကျွန်တော်တို့ရဲ့ DELETE statement ထဲမှာလဲ ဘယ်ဟာကိုပဲ remove လုပ်ချင်တာပါဆိုပြီး တိတိကျကျ သတ်မှတ်ပေးလို့ရပါတယ်။ </p>
    <p>For Example:</p>
    <pre>
        <code class="html hljs xml">
            <strong>How to Write? => DELETE FROM &lt;table&gt; WHERE &lt;condition&gt;;</strong>

            SELECT * FROM books;
            DELETE FROM books WHERE id = 10;
            SELECT * FROM books;
        </code>
    </pre>
    <div class="img-size">
        <img src="images/delete.png" alt="Delete specific row image">
    </div>
    <hr>


    <h2>Introduction to Transactions</h2>
    <p>ကျွန်တော်တို့ဟာ database တစ်ခုနဲ့ relationship တစ်ခုချိတ်မယ်ဆိုရင် အထူးသဖြင့် data ကို modify လုပ်တဲ့အခါမှာ ကျွန်တော်တို့အနေနဲ့ commit လုပ်ဖို့လိုအပ်ပါတယ်။ ကျွန်တော်တို့ဟာ CRUD operations တွေထဲက တစ်ခုကိုလုပ်ဆောင်ဖို့ statement တစ်ခုရေးတဲ့အခါ ကျွန်တော်တို့ရေးလိုက်တဲ့ SQL statement က execute လုပ်လိုက်တာကို တိတိကျကျ run ဖို့လိုအပ်ပါတယ်။ Production environment တစ်ခုမှာဆိုရင် အစောက state ကို ပြန်သွားဖို့ခက်ခဲပါလိမ့်မယ်။ ဘာလို့လဲဆိုရင် ကျွန်တော်တို့ statement တော်တော်များများဟာ autocommit mode အတွင်းမှာပဲ run လုပ်ကြလို့ပဲဖြစ်ပါတယ်။ ဆိုလိုတာကတော့ ကျွန်တော်တို့ execute လုပ်လိုက်တာဟာ committed ရသွားတယ် (သို့) disk ထဲကို save လုပ်သွားတာဖြစ်ပါတယ်။ Database အများစုမှာတော့ autocommit ကို default အနေနဲ့ switch on လုပ်ထားပါတယ်။
     ဒီသင်ခန်းစာမှာတော့ autocommit operation ကိုလေ့လာသွားမှာဖြစ်ပြီး autocommit ဆိုတာက ကျွန်တော်တို့ statements တွေရဲ့ results တွေကို disk ထဲမှာ save လုပ်ပေးတာဖြစ်ပါတယ်။ ဒါပေမယ့် ကျွန်တော်တို့ဟာ multiple statements တွေကို အတူတကွ execute လုပ်တဲ့အခါမျိုးမှာတော့ သူ့ကိုမသုံးပါဘူး။ Multiple statements တွေကို running လုပ်ခြင်းက SQL file တစ်ခုအတွင်းမှာ prepare လုပ်လိုက်တာပဲ ဖြစ်ပါတယ်။ ဒါကို script file တစ်ခုလို့ခေါ်ပါတယ်။ ဥပမာ ကျွန်တော်တို့က statement 6 ခုကို တစ်ခါတည်း run မယ်ဆိုပါစို့။ ပထမဆုံး statement 3ခုကို run ပြီးတဲ့အချိန်မှာ ကျွန်တော်တို့ computer က crashes ဖြစ်သွားမယ်ဆိုရင် statement 3ခုပဲ အရင်ဝင်သွားပြီး ကျွန်တော်တို့ computer က reboot လုပ်ပြီးတဲ့အခါ အဲ့ဒီ statement 6ခုကို ပြန်runလိုက်မယ်ဆိုရင် အရင်ဝင်သွားပြီးသား statement 3ခုရယ် နောက်ထပ် run လိုက်တဲ့ statement 6ခုရယ်က duplicate ဖြစ်သွားမှာဖြစ်ပါတယ်။ Real world မှာဆိုရင် database seed scripts တွေဟာ statements တွေ hundreds မက ပါဝင်နိုင်ပါတယ်။ ဒီလို trashes ဖြစ်တာတွေကို fix လုပ်ဖို့ transactions တွေကို အသုံးပြုတဲ့နည်းလမ်းတစ်ခုရှိပါတယ်။ ကျွန်တော်တို့ဟာ အရင်ဆုံး autocommit ကို switch off လုပ်ရပါမယ်။ ဒီလိုလုပ်ဖို့အတွက် BEGIN TRANSACTION နဲ့စရေးလို့ရပါတယ်။ ဒါဟာ database ကို statements တွေအားလုံးက all in one အနေနဲ့ ကျွန်တော်တို့ ready ဖြစ်တဲ့အချိန်မှာ commit လုပ်သင့်တယ်လို့ ညွှန်ကြားလိုက်တာဖြစ်ပါတယ်။ BEGIN TRANSACTION; ကိုရေးပြီး သူ့နောက်က statements တွေပြီးတဲ့နောက်မှာ သူတို့ကို save ဖို့အတွက် COMMIT; လို့ရေးရပါမယ်။ </p>
     <p>For Example:</p>
     <pre>
        <code class="html hljs xml">
            // switch off the statement
            BEGIN TRANSACTION; // also write "BEGIN" for short

            INSERT INTO genres (name) VALUES ("Non Fiction");
            INSERT INTO genres (name) VALUES ("Fiction");
            INSERT INTO genres (name) VALUES ("Classic");

            COMMIT;
            // save the results of statements
        </code>
     </pre>
     <hr>


     <h2>Rolling Back from Transactions</h2>
     <p>ကျွန်တော်တို့ဟာ database ထဲက complex updates တွေအတွက် transactions တွေကိုအသုံးပြုခြင်းဟာ တစ်ကယ်ကို အသုံးဝင်ပါတယ်။ ကျွန်တော်တို့ဟာ transactions တွေအတွက် rollback statement ကိုရေးမယ်ဆိုရင် ကျွန်တော်တို့ရဲ့ transaction ကို BEGIN ဆိုတဲ့ keyword နဲ့စပြီး rows တွေကို insert လုပ်လိုက်ပါမယ်။ ကျွန်တော်တို့အနေနဲ့ သူတို့ကို မြင်ရဖို့အတွက် SELECT * FROM &lt;table&gt; ဆိုတာကိုတောင် add လုပ်လို့ရတယ်ဆိုပေမယ့် တစ်ကယ် add လုပ်တာမဟုတ်ပါဘူး။ တစ်ကယ်လို့ သူတို့က same query နဲ့ run မယ်ဆိုရင်တောင် အမှန်တကယ် မြင်ရမှာမဟုတ်ပါဘူး။ ဒါက ကျွန်တော်တို့ကို review ကြည့်လို့ရရုံပါပဲ။ ကျွန်တော်တို့ဟာ undo လုပ်ဖို့အတွက် ROLLBACK ဆိုတဲ့ statement ကိုရေးပေးရပါတယ်။ ဒီအချိန်မှာတော့ ကျွန်တော်တို့ table ကို SELECT * FROM &lt;table&gt; လို့ထုတ်ကြည့်မယ်ဆိုရင် ကျွန်တော်တို့ insert လုပ်ထားခဲ့တဲ့ entries တွေက ရှိတော့မှာ မဟုတ်ပါဘူး။ ဘာလို့လဲဆိုရင် သူတို့ဟာ first place ထဲမှာမရှိလို့ပဲဖြစ်ပါတယ်။ ကျွန်တော်တို့ဟာ changes တွေကို commit  မလုပ်ခဲ့လို့ပါ။ ကျွန်တော်တို့အနေနဲ့ multiple code operations တွေကို တစ်ကြိမ်တည်း issue လုပ်ရတာမျိုးရှိနိုင်ပါတယ်။ ပြီးတော့ သူတို့ကို issue လုပ်ရတာလည်း problematic ဖြစ်နိုင်ပါတယ်။ ဒါပေမယ့် rolling back ကတော့ အမြဲတမ်း option တစ်ခုပဲဖြစ်ပါတယ်။ </p>
     <p>For Example:</p>
     <pre>
        <code class="html hljs xml">
            // switch off the statement
            BEGIN TRANSACTION; // also write "BEGIN" for short

            INSERT INTO genres (name) VALUES ("Non Fiction");
            INSERT INTO genres (name) VALUES ("Fiction");
            INSERT INTO genres (name) VALUES ("Classic");

            SELECT * FROM genres;
            ROLLBACK;
            SELECT * FROM genres;
        </code>
     </pre>
     <hr>


     <h2>Databases with Frameworks</h2>
     <p>Developers တွေတော်တော်များများဟာ သူတို့ရဲ့ data တွေကို store လုပ်ထားဖို့အတွက် databases တွေကို အသုံးပြုကြပါတယ်။ သူတို့တွေဟာ developers တွေရဲ့ day-to-day jobs တွေကိုမှတ်သားဖို့ code တွေအများကြီးရေးစရာမလိုဘဲ single line of SQL code တစ်ခုတည်းကိုပဲ အသုံးပြုနိုင်ပါတယ်။ ဒါဟာဘာဖြစ်လို့လဲဆိုရင် developers တွေဟာ programming languages တော်တော်များများမှာအသုံးပြုတဲ့ ORMs လို့ခေါ်တဲ့ special software libraries တွေကို အသုံးပြုကြလို့ပဲဖြစ်ပါတယ်။ ORM ရဲ့အရှည်ကောက်ကတော့ Object-Relational Mapping ပဲဖြစ်ပါတယ်။ သူဟာ developers တွေကို database တစ်ခုနဲ့ interface လုပ်ဖို့သုံးတဲ့ SQL နဲ့ CRUD operations တွေကို လုပ်ဆောင်တာတွေထက် အခြား programming language တစ်ခုကို အသုံးပြုဖို့ နည်းလမ်းတစ်ခုပဲဖြစ်ပါတယ်။ ORMs တွေဟာ developers တွေအတွက် transactions တွေကို handle လုပ်ပေးတာဖြစ်ပါတယ်။ ဒါဟာ developers တွေကို robust applications တွေတည်ဆောက်ဖို့ ကူညီပေးပါတယ်။ ORM ဟာ SQL ကိုအသုံးပြုနေဆဲပါပဲ။ Developer ဟာ သူတို့ application ကို တည်ဆောက်ထားတဲ့ programming language တစ်ခုကိုပဲ ထိတွေ့ရပါတယ်။ ORMs တွေမှာ ဥပမာအနေနဲ့ Java အတွက် Hibernate, Object-C နဲ့ Swift အတွက် CoreData, Python အတွက် Django ORM နဲ့ Ruby အတွက် ActiveRecord စသဖြင့် ပါဝင်ပါတယ်။ CRUD ကို SQL ရဲ့တစ်စိတ်တစ်ပိုင်းမှာ DML (data manipulation language) လို့ခေါ်ပါတယ်။ </p>



</body>
</html>