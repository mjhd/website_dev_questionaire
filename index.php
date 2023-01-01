<?php
if(!empty($_POST))
  echo "<pre>" . var_dump($_POST) . "</pre>";
else {
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Website Design Questionnaire</title>

	<style>
		* { font-family: sans-serif; font-size: 16px; }

    body {
      display: block;
      position: relative;
      max-width: 1200px;
      margin: auto;
    }

		h1 { padding: 20px 40px; margin-left: 60px; }
		img { position: absolute; top: 25px; right: 100px; width: 100px; }

		li { padding: 20px; margin-bottom: 10px; border-top: solid 2px #000; width: 90%; }
		li:nth-of-type(1) { border-top: none; }

		body > h3, body > h4 { padding: 20px; }

    #question_list li div {
      max-width: 460px;
      margin-top: 10px;
    }
    #question_list li textarea {
      height: 50px;
      width: 100%;
    }

		@media only screen and (max-width: 1040px) {

			h1 { margin: 10px;  text-align: center; }
			body > img { display: block; position: static;  margin: auto; }

		}

		@media only screen and (max-width: 600px) {

			ol { padding: 0; margin: 25px; }
			li { margin-bottom: initial; margin: 25px 0; }

		}
	</style>
  <script type="text/javascript">
    document.question_data = Array(
      "What are three websites you really like and which one are you most looking to emulate?",
      "What bothers you about websites you visit that you want to avoid with yours?",
      "Describe your audience briefly. If you are a construction company are you primarily residential, commercial or industrial? Do you sell your products retail or wholesale? Do you deal mostly with retailers or large suppliers? Are your services targeting consumers or businesses? Are your customers young hip macbookers or middle management tie wearers? Do you cater specifically to one demographic like women or children?",
      "List a few descriptive words you would like to come to mind when people view your site. Examples would be: Professional and reliable, young and edgy, unique and creative, classic and stable, interesting and exciting, new and different, captivating and thought provoking etc...",
      "Do you have a logo, defined company colors and font, or general style outlines of any type?",
      "If not - do you have a general idea of what these things should be like and what degree of creative freedom should I exercise if this is something I will be responsible for?",
      "From 1 - 10 how much content do you have? Some things to consider here: Are you going to have a long company bio - will you list your employees and will they have bios - will you have a few picture or do you have pictures of dozens of products - do your products/services require considerable explanation - will you have tutorials, specifications or product demonstration videos - do you have several very active social media accounts etc.",
      "How much content do you currently have available? Do you have an entire external hard drive filled with images and a plethora of printed materials to draw text from or will you need help filling this in?",
      "Do you have your content prioritized? In other words, if someone was to briefly scan your website and only saw the most prominent text and images - what would those be?",
      "Similarly, what do you want the focal point of the site to be visually or interactively? This is a harder question to answer but sites can prioritize large blocks of highly visible text, product imagery, complimentary imagery, diagrams or infographics, interactive elements like maps or forms to narrow user needs etc.",
      "Will your website need constant updates and new content? This can include a blog that will need new posts regularly, an e-commerce site that will need new products added, a service that will need availability or schedule updates, or any of the above that has new images regularly or details that must be constantly conveyed.",
      "Will I be maintaining the day to day updates of your site or will you want a staff member to do this? If staff member, will they have basic HTML knowledge or will you need a user friendly interface? Note: Some sites will go up, serve their purpose of online advertising and rarely if ever be updated - this is also perfectly normal and fine.",
      "Do you have any other web based assets that should be integrated? This may include social media, Yelp or Angies List, Google Maps listing, email contact lists or newsletters, a blog, a YouTube channel, online service listings like YellowPages, CitySearch, Elance etc or outside sales platforms like Shopify, Amazon, Ebay, Etsy etc?",
      "How interactive do you want your website to be? Some websites are akin to online magazine ads while others are very engaging and require more user interaction to be effective. My site: MJHd.me for example is highly interactive and is designed more like a single page web application than a traditional website.",
      "What type of SEO (Search Engine Optimization) goals do you have in mind? In other words do you anticipate people to find you through search who are not specifically looking for you (thus you are trying to move up in search results to maximize traffic from web searches)",
      "If you are trying to rank well in search results, do you have a marketing company or employee(s) associated with marketing duties?",
      "Do you anticipate a large mobile viewership - if you're not sure - it's ok!",
      "If your site gets more mobile traffic than you anticipate, will you want a mobile optimized site? (All sites I make are responsive - meaning they look nice on mobile devices, but responsive sites are always slower than completely dedicated mobile sites for inherently slower cellular data connections)",
      "Aside from looking awesome, what things do you need your website to do? Examples would be: The ability to upload files and documents, accept payments, show availability and schedule appointments, get directions to different locations or show social media feeds in real time etc...",
      "Do you have any other specific security concerns like locked areas for registered users, encrypted payment gateways or secure file transfers etc?",
      "Do you have an ideal launch date or at least an approximate time frame for completion and how firm is that date?",
      "CRITICAL - Who will be my primary point of contact, this person will be the FINAL decision maker from my side - if this person says bright pink with purple polka dots that is exactly what you will get!",
      "Similarly, do you employ or contract with an IT person/service that I will be working with or keeping updated?",
      "Additional questions to have answered: Do you have a domain registered? Do you have hosting? DO you currently have a site built on a CMS like WordPress? Do you have all available logins for these?"
    )
  </script>
  </head>

<body>

<h1>Website Design Questionnaire</h1>
<img src="data:image/png;base64,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" />

<form action="https://devlab-assets.mjhdev.repl.co/website_dev_questionaire.php" method="post"><ol id="question_list"></ol><input type="submit" /></form>

<h3>Above all - please have ANY materials you currently have available for me as soon as possible. This will include: Letterheads, a business card, company bio, brochures, news letters, images, articles, company copy or ANYTHING that can help guide me in the right direction of what you're hoping to accomplish.</h3>
<h4>The more I have the easier both our lives will be - sometimes the biggest hangups in building a website are because of delay in having content prepared to go live...</h4>

<script type="text/javascript">
  let question_list = document.getElementById("question_list")
  let questions = document.question_data.length
  while(questions--) {
    let response_item = document.createElement("li")
    let response_container = document.createElement("div")
    let response_text = document.createElement("textarea")
    response_item.innerText = document.question_data[questions]
    response_text.name = "question_" + (questions + 1)
    response_container.append(response_text)
    response_item.append(document.createElement("br"))
    response_item.append(response_container)
    question_list.prepend(response_item)
  }
/*
  for(let question of document.question_data){
    let response_item = document.createElement("li")
    response_item.innerText = question
    response_item.append(document.createElement("br"))
    question_list.append(response_item)
  }
*/
</script>
</body>
</html>
  <?php } ?>