<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/style/main.css">
  <title>Document</title>
</head>
<body>

  <!-- @here Esercizio di oggi: Google FAQ
  Descrizione
  Riscrivere questa pagina del sito google https://policies.google.com/faq
  Ci sono diverse domande con relative risposte. Gestire il “Database” (array) e la visualizzazione di queste domande e risposte con PHP.
  Non preoccupatevi dei link presenti nel testo delle risposte -->


  <?php
  $content = array(
    [
      'question' => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
      'answare' => "The recent <span> ruling by the Court of Justice of the European Union </span>has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive. <br><br>

      Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information. <br><br>
      
      If you have a removal request, please fill out this <span> web form </span>. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA. <br><br>
      
      We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law. <br><br>
      
      When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal." 
    ],

    [
      'question' => 'How does Google protect my privacy and keep my information secure?',
      'answare' => "We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it. <br><br>

      We’re constantly working to ensure strong security, protect your privacy and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We've also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control. <br><br>
      
      You can <span> find out more </span> about safety and security online, including how to protect yourself and your family online, at the <span> Google Safety Centre.</> <br><br>
      
      Find out more about how we keep your personal information private and safe – and put you in control."
    ],

    [
      'question' => 'How can I remove information about myself from Google’s search results?',
      'answare' => "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should <span> contact the </span> webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please <span>click here. </span> Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also visit <span>our help page for more information. </span>"
    ],

    [
      'question' => "Are my search queries sent to websites when I click on Google Search results?",
      'answare' => "In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the <span>Referrer URL. </span> The URL of the search results page may sometimes contain the search query that you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behaviour, such as if you are using some less popular browsers. More information on SSL Search can be found <span>here </span>. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click."
    ]
    );
  ?>

  <div class="app">

    <header class="header">
      <div class="header__logo">
        <img class="google-logo" src="dist/img/google.png" alt="GOOGLE">
        <h4>Privacy & Terms</h4>
      </div>
      <nav class="header__nav">
        <div class="nav__left">
          <ul class="nav__list">
            <li class="list__item">Overview</li>
            <li class="list__item">Privacy Policy</li>
            <li class="list__item">Terms of Service</li>
            <li class="list__item">Techonlogies</li>
            <li class="list__item list__item--active">FAQ</li>
          </ul>
        </div>
        <div class="nav__right">
          <h5>Google Account</h5>
        </div>
      </nav>
    </header>

    <main class="main">
      <div class="main__wrapper">
        <?php for( $i = 0; $i < count($content); $i++){ ?>
        <section class="main__section--<?php echo $i ?>">
          <h3><?php echo $content[$i]['question']?></h3>
          <p><?php echo $content[$i]['answare']?></p>
        </section>
        <?php }?>  
      </div>
    </main>

    <footer class="footer">
      <div class="footer__wrapper">
        <div class="footer__left">
            <ul class="footer__list">
              <li class="list__item">Google -</li>
              <li class="list__item">About Google -</li>
              <li class="list__item">Privacy -</li>
              <li class="list__item">Terms</li>
            </ul>
        </div>
        <div class="footer__right">
          <img src="dist/img/world.png" alt="">
          <select class="footer_selection">
                    <option value="English">English (United Kingdom)</option>
                    <option value="Italian">Italian</option>
                    <option value="Japanase">Japanase</option>
                    <option value="Spanish">Spanish</option>
          </select>
        </div>
      </div>
    </footer>
  </div>

  <script src="dist/script/main.js"></script>
</body>
</html>