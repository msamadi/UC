<?php
session_start();
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>How to become a healthy person?</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery.ui.core.js"></script>
<script src="js/jquery.ui.widget.js"></script>
<script src="js/jquery.ui.mouse.js"></script>
<script src="js/jquery.ui.sortable.js"></script>
<script src="js/jquery.collapser.js" type="text/javascript"></script>
<script src="js/nestedSortable.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/pagestyle.css" >
</head>

<body>
<div id="wrap">
    <div id="header">
	<div>
		<div id="headerSearchBox">
			<form id="search" method="post" action="process__search.php">
			<input id="quickSearchBox" class="ui-autocomplete-input" type="search" onfocus="emptyField()" value="Search here..." name="query" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
			<input class="button" type="submit" value="Quick Search" name="searchButton">
			</form>
			</div>
			<div>
			<span id="allByCategoryFixedTab">
		</div>
	</div>
	<div id="headerUserContent">
		<p> mh.samadi@gmail.com </p>
		<a title="Profile" href="userProfile.php?id=mh.samadi@gmail.com">
		<img src="images/mh.samadi@gmail.com.jpg">
		</a>
		<a id="logOutButton" title="Log Out" href="process__logOut.php?url=http://tortobot.ayric.co/root/">
		<img src="images/icon_lock.png">
		</a>
		<a title="Edit Account" href="editAccount.php">
		<img src="images/icon_setting.png">
		</a>
		<a title="Home Page" href="index.php">
		<img src="images/icon_home.png">
		</a>
	</div>
    </div>
    <div id="content">
        <div id="leftbar"><div class="title"><h2 class="blk">Layers</h2></div>
		<div style="clear:both">
			<div class="contdiv" id="leftcv">
				<div id="tranc">
					
				</div>
			</div>
		</div>
		<div style="clear:both"> &nbsp;&nbsp;&nbsp;&nbsp;
		</div>
        	
		<div id="toggle1">
				<form id="form1" name="form1">
					<ul>
						<li>
						<input type="text" name="titletxt" id="titletxt" class="txtbox" />
						<input type="submit" id="addtranc" class="button" value="Add Layer" />
						</li>
						<li id="showpre">&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" name="pre" id="pre" />
							<label for="pre">It's a prerequisite</label>
						       <select id="selectpre" name="selectpre" class="multi"></select>
						</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					 </ul>
				</form>
			</div>
		</div>
        <div id="main"><div class="title" id="maintitle"><h2>How to become a healthy person?</h2></div>
        	<div class="contdiv">
             <div class="basic">
                <ol class="sortable" id="sortable1" >
		
			
				
			
		    
                </ol>
                 <div class="clear"></div>
             </div>
	     
             <div id="step">
             <span style="float:left"></span><b></b>
             	<form id="form2" name="form2"  >
                <ul>
                  <li style="clear: left" id="liinst1">
                  <input type="text" name="ins1" id="ins1" />
		  <input type="submit" class="button" id="addstep" value="Add Step" />     
		  </li> 
                 </ul>
                </form>
              </div>
            </div>	
         </div>
      <div id="rightbar">
      	<div class="title"><h2 class="blk">Similar Plans</h2></div>
       	<div class="contdiv" id="cdiv">
             <div id="sortable2" style="width:360px;float:left;font-size:12px;">
             	 <li class="similars"><div class="lasnum">1</div><h2>Become a very Healthy Person</h2>
                 	<ul>
				<p>Get lots of sleep</p>
				<li><div class="comment more"> In order to maintain a healthy body, you'll need 8-10 hours of sleep every day. This keeps you awake and alert, so you don't have to drink caffeine and sugar-loaded energy drinks. If you are a kid and have early school times, go to sleep earlier on school nights.</div></li>
				<p>Laugh and smile!</p>
				<li><div class="comment more"> Smiling a lot makes your face look younger and it feels great. If you laugh a lot, it has been scientifically proven to keep you healthier.</div></li>
				<p>Do nothing</p>
				<li><div class="comment more"> Staying in a dark, quiet place without having any stressful thoughts for about ten minutes will leave you feeling refreshed. If you just relax, you will feel better and probably keep feeling good through the day. Just do this a couple of times a day</div></li>
				<p>Eat more fruits and vegetables</p>
				<li><div class="comment more"> Fruits and vegetables are an essential part of a healthy diet. Try to get at least 5-9 servings a day.</div></li>
				<p>Drink water!</p>
				<li><div class="comment more"> Good old H2O is key in making you run throughout the day. Try drinking 8 eight-ounce glasses of water each day. It helps you re-energize and keep going. Not drinking enough fresh water leads to acne, headaches, and even dehydration. Do this, and you'll stay in good condition.</div></li>
				<p>Stretch!</p>
				<li><div class="comment more"> It feels great! From when you wake up in the morning, to your gym class, this easy form of muscle exercise warms you up and makes you more flexible. If you continuously stretch each day, you will end up being really flexible and nimble. It keeps you running longer and gives you strength.</div></li>
				<p>Run and jog!</p>
				<li><div class="comment more"> This doesn't necessarily mean run five miles every morning, but jogging or running for about 10 minutes at an easy pace definitely will keep you in shape. Try jogging for about 10 minutes 2 times a week. It will keep your muscles strong and fit every day. Don't ever run for an hour and then suddenly stop and sit on the couch for another hour. This will give you terrible cramps and will make it so it hurts to walk the next day. Slowly kick down the pace to a walk, and take deep breaths. Running will get you that A in gym class, trust me!</div></li>
				<p>Challenge yourself</p>
				<li><div class="comment more"> If you got 10 push-ups as your maximum, try going for 12! Little challenges like this keep your body nice and fit.</div></li>
				<p>Do something you love</p>
				<li><div class="comment more"> Play with a pet, go swimming, or jump on a trampoline! Doing things you love to do keep you in a good mood, and make you happier. If you had a bad day at school, ride a bike and take out your anger. Not only is this fun, but it lets you be yourself for awhile. Try it!</div></li>
				<p>Feel good about yourself!</p>
				<li><div class="comment more"> There is always going to be someone in the room who does at least one thing better than you, so don't compare yourself to other people! Find things you are good at, and use your talents!</div></li>
				<p>Get a little exercise everyday</p>
				<li><div class="comment more"> This will not only make you feel better, and make you look better, but help you to get through the day.</div></li>
			</ul>
                 </li>
		 <br/>
                  <li class="similars"> <div class="lasnum">2</div><h2>Become a very Healthy Person</h2>
                  	<ul>
				<p>Get lots of sleep</p>
				<li><div class="comment more"> This may not sound like much, but in order to maintain a healthy body, you’ll need 8-10 hours of sleep every day. This keeps you awake and alert, so you don’t have to drink caffeine and sugar-loaded energy drinks. If you have early school times, go to sleep earlier on school nights.</div></li>
				<p>Laugh and smile!</p>
				<li><div class="comment more"> Smiling a lot makes your face look younger and it feels great. A lot of people eat way too much when they are upset. If you laugh a lot, it has been scientifically proven to keep you healthier.</div></li>
				<p>Do nothing</p>
				<li><div class="comment more"> Staying in a dark, quiet place without having any stressful thoughts for about ten minutes will leave you feeling refreshed. If you just relax, you will feel better and probably keep feeling good through the day. Just do this a couple of times a day.</div></li>
				<p>Drink water!</p>
				<li><div class="comment more"> Good old H2O is key in making you run throughout the day. Try drinking 8 eight-ounce glasses of water each day. It helps you re-energize and keep going. Not drinking enough fresh water leads to acne, headaches, and even dehydration. Do this, and you’ll stay in good condition.</div></li>
				<p>Stretch!</p>
				<li><div class="comment more"> It feels great! From when you wake up in the morning, to your gym class, this easy form of muscle exercise warms you up and makes you more flexible. If you continuously stretch each day, you will end up being really flexible and nimble. It keeps you running longer and gives you strength.</div></li>
				<p>Run and jog!</p>
				<li><div class="comment more"> I’m not saying run five miles, but jogging or running for about 10 minutes at an easy pace definitely will keep you in shape. Try jogging for about 10 minutes 2 times a week. It will keep your muscles strong and fit every day. Don’t ever run for an hour and then suddenly stop and sit on the couch for another hour. This will give you terrible cramps and will make it so it hurts to walk the next day. Slowly kick down the pace to a walk, and take deep breaths. Running will get you that A in gym class, trust me!</div></li>
				<p>Challenge yourself</p>
				<li><div class="comment more"> If you got 10 push ups as your maximum, try going for 12! Little challenges like this keep your body nice and fit.</div></li>
				<p>Do something you love</p>
				<li><div class="comment more"> Play with a pet, go swimming, or jump on a trampoline! Doing things you love to do keep you in a good mood, and make you happier. If you had a bad day at school, ride a bike and take out your anger. Not only is this fun, but it lets you be yourself for awhile. Try it!</div></li>
				<p>Feel good about yourself!</p>
				<li><div class="comment more"> There is always going to be someone in the room who does at least one thing better than you, so don’t compare yourself to other people! Find things you are good at, and use your talents!</div></li>
				<p>Accomplish something</p>
				<li><div class="comment more"> This will make you feel victorious! Performing a song or using your talents to amaze someone else makes you feel great!</div></li>
			</ul>
                  </li>
		 <br/> 
                  <li class="similars"><div class="lasnum">3</div><h2>Become a very Healthy Person</h2>
                    <ul>
			<p>Chiefly</p>
                    	<li><div class="comment more"> Chiefly, you will be able to become a healthy person by eating good food. Do not eat unhealthy foods if you want to become a very healthy person soon. Eat foods which are nourishing and supply your body with adequate proteins, carbohydrates and fats. These three essential nutrients are good for humans and even animals. If animals need to have proteins in their diets, then human beings should not aim to live without them as they are very vital. There is no absolute doubt that you will not be healthy if you eat foods which make your heart a very effective one. Foods which raise cholesterol levels will feasibly damage the hearts of many people. You will not become a very healthy person if your heart malfunctions all the time.</div></li>
			<p>Educate yourself</p>
                    	<li><div class="comment more"> Educate yourself when aiming to become a healthy person. Some uneducated individuals have no clue of what fatty foods will do to their stomachs and hearts. You do not need a college degree before you can know that fatty food make many entities unhealthy. Henceforth, allow your doctor to help you so that you can have access to a very vital diet plan.</div></li>
			<p>Exercise your body</p>
                        <li><div class="comment more"> Always exercise your body when aiming to become a very healthy person. Bruce Lee was a very healthy individual and exercised his body well to stay in shape. You should not avoid exercising your body when aiming to become a very healthy person in the not-too-distant future.</div></li>
                    </ul>
                  </li>
		  <br/>
                  <li class="similars"> <div class="lasnum">4</div><h2>Become a very Healthy Person</h2>
                    <ul>
			<p>Get Adequate Sleep</p>
                    	<li><div class="comment more"> 
No one really understands why this isâ¦ but we humans need to sleep. Our bodies must recover while our souls rest.
To be sure, everyone is different, but if you donât get adequate sleep on a regular basis I feel confident in guaranteeing youâre not as productive as you could be.
Donât believe me? Prove me wrong and get at least 8 hours of sleep for 14 nights straight and see what happens.</div></li>
			<p>Eat Well</p>
			<li><div class="comment more"> 
Next, eating well is extremely important. Like exercise, I was not doing well in this area for a long time. I ate bad foods more than good food and drinking several sugar filled sodas throughout the day was the norm.
Now I’m doing my very best to eat more salads, drink water instead of soda, and since my wife is an organic food fanatic evening meals are always healthy.</div></li>
			<p>Read</p>
			<li><div class="comment more"> 
As important as exercise and diet are to the body I feel reading is equally important for the health and vitality of your mind.
Since youâre reading this sentence chances are you’re doing well in this area. But this doesnât mean you canât do better. If you read for 15 minutes before bed crank it up to 20.</div></li>
			<p>Pray</p>
			<li><div class="comment more"> 
Finally, I’m a man of faith and find spending time in quiet prayer extremely valuable.
It helps me keep perspective while also seeking guidance as I navigate through this thing called life.
If you’re not a person of faith I’d still encourage you to take some time throughout the day to quiet your mind and reflect on the blessings and challenges of your life.</div></li>
                    </ul>
                   </li>
		   <br/>
		   <li class="similars"> <div class="lasnum">5</div><h2>Become a very Healthy Person</h2>
                     <ul>
			<p>Stretch every morning!</p>
                    	<li><div class="comment more"> 
Even if its just 5 minutes, stretch! Get the blood flowing, and prepare your body for the day ahead.</div></li>
			<p>Help Others</p>
                    	<li><div class="comment more"> 
Believe it or not, helping others WILL indeed make you feel good. Whether its holding the door, picking up someones trash that didn't make it into the bin, or helping an elderly person with their groceries; make an effort!
</div></li>
			<p>Eat a Mediterranean diet</p>
			<li><div class="comment more"> Eat a Mediterranean diet rich in produce, wholes grains, nutritious oils and nuts. This diet will actually alter your state of mind, it did for me anyways. I feel more energized, less stressed and genially healthier when i fill up on these types of foods.</div></li>
			<p>Wash your face before bead</p>
			<li><div class="comment more"> 
Whether you wear makeup or not its always a good idea to wash your face at the end of the day to clean out clogged pores and rejuvenate your skin.</div></li>
			<p>Fit in 45 minutes of activity a day</p>
			<li><div class="comment more"> 
Do what ever you want as long as it gets you moving! Skip when ever you can, walk when ever possible, and dance your heart away</div></li>
			<p>Cook your own food and limit high fat foods to ONCE a week</p>
			<li><div class="comment more"> 
Cooking your own food instead of ordering out or buying pre-cooked frozen meals will greatly benefit your health and your bank book. Plan out your meals every week so you have what you need to make dinner mon-fri. Last minute dinner decisions usually lead to fast-food or frozen tv dinners, gross! Plan your meals ahead of time and save yourself some stress</div></li>
			<p>Talk it out or write it down</p>
			<li><div class="comment more"> 
I'm an emotional person, and i found that i need to write things down or either talk it out in order to release the stress. When you feel mad, sad, stressed or just not right, write it down in a notepad or book. If you have certain people, such as loved ones who you feel you can speak to about your feelings, then do so.</div></li>
			<p>Stay away from celebrity gossip magazines!</p>
			<li><div class="comment more"> 
Honestly, you really don't need to know about who's doing who, who's in rehab, who just made a sex tape, who's "fat", ext..
These magazines just create false images in our minds, we end up comparing ourselves to them and then feel disappointed or even ashamed. Don't set yourself up for disappointment.</div></li>
			<p>Use simple yoga</p>
			<li><div class="comment more"> For stretching use simple yoga moves such as the downward dog, upward dog, mountain pose, ext.</div></li>
			<p>karma</p>
			<li><div class="comment more"> If you're are one to believe in Karma Step 2 is for you. If you aren't then still keep in mind "what goes around, comes around"</div></li>
			<p>I do Pilates</p>
			<li><div class="comment more"> For step 5, strength training can fit into this. I do Pilates and that's what i suggest as well. Its about 10 minutes for each body part. Also, strength training is a GREAT way to slim down and tone up!</div></li>
			<p>Read magazines</p>
			<li><div class="comment more"> If you need to read some kind of magazine, read the fitness or health magazines</div></li>
                    </ul>
                   </li>
		   <br/>
		   <li class="similars"> <div class="lasnum">6</div><h2>Become a very Healthy Person</h2>
                     <ul>
			<p>Eat less</p>
                    	<li><div class="comment more"> Yep. Eating less is a sure fire way to slow down your metabolism, cause you to binge on junk food and make you feel tired and lazy. Keep it up!</div></li>
			<p>Eat before bed time</p>
                    	<li><div class="comment more"> If you want to add one some COMPLETELY useless rolls of fat then you should have another meal after dinner or at least have your dinner as close as you can to bed time. That way your body will have no chance of burning any of the calories and it will be absorbed straight as fat!</div></li>
			<p>Eat three square meals a day</p>
			<li><div class="comment more"> Follow the old tradition of three square meals a day and watch the weight come on. Not only does it slow your metabolism down but it makes you snack on junk food when you are dying for a meal inbetween big meals. Good idea!</div></li>
			<p>Sit on the computer all day</p>
                    	<li><div class="comment more"> If you are at work or just like reading fitness blogs, it is a great idea to sit on the computer all day long and just read about all the good exercise ideas. It is great for your eye’s, back, neck and gut.</div></li>
			<p>Mix carbs and fats</p>
                    	<li><div class="comment more"> Having a big bowl of pasta covered in a cheese based sauce is a good way to get fat. Mixing the two types of food that are hardest to burn as energy is an excellent way to make sure your food gets converted straight into fat stores.</div></li>
			<p>Replace water with sodas</p>
                    	<li><div class="comment more"> Highly sugared drinks are a sweet replacement for boring old water. Who needs the pure clear stuff that cleanses your organs and quenches your hunger pains when you can have a fattening, teeth rotting, nutrient sucking soda? Not me.</div></li>
			<p>Never eat fruit</p>
                    	<li><div class="comment more"> Fruit is a boring food that is made up of so many vitamins, minerals and other essential nutrients. Each calorie in a piece of fruit comes with so much benefit attached. It is better to forget about eating this food and opt for breads, man-made cereals and other fatty breakfast choices.</div></li>
			<p>Never exercise</p>
                    	<li><div class="comment more"> I think if you want to add weight as fast as you can you just need to stop exercising all together. Exercise boosts your heart rate, boosts your metabolism and burns calories even when you have finished the workout. That means you will stop foods and energies from being absorbed as fat! Bad idea.</div></li>
			<p>Never cook your own meals</p>
			<li><div class="comment more">Eating out or getting take away every day and every night because you are too tired or lazy to cook your own meal is probably the best way to get as fat as you can as fast as you can .Take away foods cripple your body with msg, salt, refined sugar and saturated fats. Perfect!</div></li>
                    </ul>
                   </li>
		   <br/>
		   <li class="similars"> <div class="lasnum">7</div><h2>Become a very Healthy Person</h2>
                     <ul>
			<p>Learn about hygiene basics</p>
                    	<li><div class="comment more"> The more you understand about hygiene the more likely you are to follow the rules on it!</div></li>
			<p>Take showers everyday</p>
                    	<li><div class="comment more"> No, not every other day: every day. Because of puberty, your sweat glands are becoming more active, which are creating different chemicals that cause sweat to turn into a disgusting odor. So, to make sure you're getting rid of all this smelly odor you should use a mild soap and warm water! Even if it's hot outside you need to shower in warm water, because that opens up your pores which means you get to clean more of that smell off of you. Then rinse off in cold water to shut your pores and eliminate the amount of bacteria that makes you stink.</div></li>
			<p>Wear clean clothing</p>
			<li><div class="comment more"> Wear clean clothing and apply deodorant to your now clean armpits. Boys, that means changing your socks and underwear every day. Girls, that means washing your bra every day if your active or every other day if you weren't very active.</div></li>
			<p>Brush your teeth at minimum two times a day</p>
			<li><div class="comment more"> Strive to try and brush your teeth after every meal! When brushing your teeth, hold your brush at an angle so it lines up with your gum line. Brush back and forth making sure to get every single tooth. Be sure to use a soft bristle brush so you don't damage your gums. And either use your brush or a tongue scraper to get rid of all the bacteria on your tongue. If you don't know this, bad breath mostly comes from either poor eating habits or poor brushing habits. After you brush for three minutes floss and use a good mouthwash. Though you should floss twice a day, if you're only going to floss once make it at night so you don't have pieces of food rotting between your teeth all night. Mouth wash and brushing your teeth alone won't get rid of bad breath, you need to floss to get rid of the pieces of food in your mouth. If you don't those pieces will gather bacteria which gives off a bad odor</div></li>
			<p>Wash your face</p>
			<li><div class="comment more"> Wash your face no more than twice a day with warm water and a facial wash for your skin type. Don't harshly scrub! Slowly and gently wash your face, using a circular motion. You should never pop pimples, this will lead to scarring and possible infection. Try to keep your hands off your face, otherwise the oils on your hands will transfer to your face and cause break outs. Always remove makeup from your face before you go to sleep and keep your hair clean to eliminate the amount of oil that gets on your face.</div></li>
			<p>Wash your hair</p>
			<li><div class="comment more"> Most people need to do this every day, but if your hair produces very little oil you may be able to only wash your hair every other day. Ask someone what they think, just because it doesn't look greasy to you doesn't mean it isn't. Use a shampoo and conditioner meant for your type of hair. If you use hair products every two or three weeks wash your hair with a clarifying shampoo to get rid of all the build up.</div></li>
			<p>Shave</p>
			<li><div class="comment more"> If you're a teenage boy, you may start shaving your face, and if you're a teenage girl, you may start shaving your legs and underarms.</div></li>
			<p>Start eating healthier</p>
			<li><div class="comment more"> Eating healthy is really important if you want to be a healthy teen. You don't need to go on a diet, just pay attention to what you're putting in your body. If you only ever eat sugary breakfast cereals and candy bars you aren't going to be healthy. Depending on your body and what works best for you, you can eat three meals a day or 5-6 mini-meals a day. NEVER skip meals. Try healthy alternatives, instead of having a bowl of ice-cream, opt for a frozen yogurt. Or try having apple slices instead of potato chips. Drink more water. This is basically the most important thing of all. If you drink more water youwill be healthier. It flushes the toxins out of your body and gives your skin a healthy glow.</div></li>
			<p>Start exercising more</p>
			<li><div class="comment more"> Whether it's walking in the park, or doing a couple of crunches do at least 20 minutes of physical activity several times a week. You should not exercise every day, when you work out you break your muscles down. It's the rebuilding that makes them stronger. If you don't give them time to rebuild, you're going to seriously hurt yourself. Exercise will make you stronger and tone your muscles. You can go to the gym and swim or run on the treadmill, buy a few work out DVDs, or just go for a jog around the block. Whatever it is, exercising will make you healthier and happier about your body. It also reduces stress and helps to calm the mind!</div></li>
			<p>Catch up on your sleep</p>
			<li><div class="comment more"> During puberty you'll find you need more sleep than you did when you were younger. Sure it's tempting to stay up late chatting with friends on the phone or computer, but the next morning you'll be miserable. You need to get a minimum of 8 hours of sleep every single night. To find out how many hours you personally should be sleeping, on a weekend go to bed at the time you do on a school night and don't set your alarm. When you wake up count how many hours you were asleep and get that many hours every night.</div></li>
                    </ul>
                   </li>
		<br/>
		   <li class="similars"> <div class="lasnum">8</div><h2>Become a very Healthy Person</h2>
                     <ul>
			<p>Help You Ease Back Into the Game</p>
                    	<li><div class="comment more"> Lots of crap situations and ways of thinking make it difficult for some guys to get back into the dating game
Maybe your girlfriend just dumped you and you're convinced no other woman is worth your time. Maybe you're a little shy about meeting new women because, hey, we're all just Medusas in disguise.
Whatever it is, having an online relationship (or two!) is a great way to ease back into the dating game. Online dating presents way less pressure than in-person dating presents, and because you're not actually face-to-face with the woman there's usually plenty of time to think about what she says and the best way you can respond to her.
In other words, you have a lot more time to make sure you present yourself in the best light - time to be witty, flirty, and intriguing.</div></li>
			<p>Boost Your Confidence</p>
                    	<li><div class="comment more"> Just as online dating can help you ease back into the dating game if you've just broken up with your girlfriend or are a little shy, it can also help boost your confidence - and for the same reasons.
Regardless of where you are, you can flirt with as many people as you want; however, when you're online, the number of women to flirt with drastically increases.</div></li>
			<p>Expand Your Social Network</p>
			<li><div class="comment more"> Even if an online relationship doesn't turn into an ongoing online dating situation, just knowing this woman can help you meet other people.
She might be able to introduce you to another woman you'd be more suited for, someone who can help you with career opportunities, or even a person who knows a person who has some experience with a particular goal you're trying to reach. You get the idea.
So, if it's possible (and with sites like MySpace, Facebook, and Twitter, it usually is possible), get to know her friends and acquaintances, too. Having shady ulterior motives isn't cool, but having a vast network of connections can be extremely beneficial.</div></li>
			<p>Expose You to New Things</p>
			<li><div class="comment more"> It's simple, really: The more people you know, the more things you're exposed to. When it comes to online relationships of any sort, there are no geographic boundaries. You can communicate with someone from your home city as easily as you can communicate with someone from another country.
Expanding your social circle in this way opens the doors for you to experience, think about, and learn about things you might have never had the chance to do if you kept your social group limited to just people within a few miles of you.</div></li>
			<p>Motivate You to Look Your Best</p>
			<li><div class="comment more"> If everything goes well with your online relationship, chances are you're going to want to meet the woman in person. Knowing that time is coming closer is great motivation to make sure you're in the best physical shape possible. That might sound superficial, but hey - she already knows what's going on in your head. Now's the time to impress her with what's going on with your body!</div></li>
                    </ul>
                   </li>
             </div>
        </div>
       </div>      
	  <div class="clear" ></div>
    </div>
    <div id="footer">
	<p align="center">
	    <a href="index.php">Home</a>
	    |
	    <a href="siteMap.php">Site Map</a>
	    |
	    <a href="about.php">About Parmid</a>
	    <br>
	    Copyright &copy; 2012 - Parmid.com
	</p>
    </div>
</div>
</body>
<script type="text/javascript">
	var count = 1;
	$(document).ready(function(){
	//More Link to expand the texts
		expand_text();
	//End of "more" to expand texts
/////////////////////////////////////////////////////////////////////////////////////////////////	
	//Hide and Show the Similar Plans in right side
		$('.similars').click(function(){
			$(this).children('ul').toggle();		   
		});
	});
	//End of Hide and Show the Similar Plans in right side		
</script>

<script>
	var session_id;		//To save updated $_SESSION['id']
	
	$("#step").hide();
	 $('#selectpre').hide();
	 $("#pre").click(function() {
		var i = $("#pre").attr('checked');
		if(i == true) {
			$('#selectpre').show();  
			$('#tranc h3').each(function(index) {
				var textop = $(this).text();
				var textid =  $(this).attr("id");
				$('#selectpre').append('<option value="' + textid + '">'+ textop +'</option>' ); 						
			});		
		}else{
			$('#selectpre').hide();
			$('#selectpre option').remove();
		}		 
	});
	 
//Change the class of the dragged li from right side :)	
	$('#sortable2').hover(function(){
		$('#sortable2 ul li').attr('class',session_id);
	});
	
//Change the class inside the blue box	
	$('.basic').hover(function(){
		$('#sortable1 div').attr('class','anything');	
	});
	
	$(function() {
		$("#add").click(function() {
			$("#toggle").slideToggle("slow");
			$('#step').hide();
			$('#titletxt').val("");
			$('#add').hide();
		});
	});
/* ajax */
$(function() {
    $("#addtranc").click(function() {
		var mytranc = new Array();
		var myid = new Array();
		var mystyle = new Array();
		var myclass = new Array();
		
		$('#tranc h3').each(function(index) {
			mytranc[index] = $(this).text();			
		});
		$('#tranc input[type=checkbox]').each(function(index) {
			myid[index] = $(this).attr("id");
			mystyle[index] = $(this).attr("style");
			myclass[index] = $(this).attr("class");
		});
		
		var dataString = $("#form1").serialize() + "&mytranc=" + mytranc + "&myid=" + myid+ "&mystyle=" + mystyle+ "&myclass=" + myclass;
		$.ajax({
		  type: "POST",
		  url: "tranc.php",
		  data: dataString,
		  success: function(data) {		
			if(data != ""){
				$('#tranc').html(data); 
				$("#toggle").hide();
				$('#selectpre option').remove();
				$('#step span').html("<br />"); 
				$("#step").fadeIn(1500, function() {});
			}
		  }
		});
		$('#titletxt').val("");
		return false;
    });
  });
  
  /* add step */
  $("#addstep").click(function() {
		// validate and process form here
		var mytext = $('#step b').text();	
		var dataString = $("#form2").serialize();
		$.ajax({
		  type: "POST",
		  url: "step.php/"+ mytext ,
		  data: dataString,
		  success: function(html) {
			$(".sortable").append(html);
		  }
		});
		$('#ins1').val("");
    return false;
  });
  
  function set_session(sess_id){
	session_id = sess_id;
  }
  
function expand_text(){
	//More Link to expand the texts
	var showChar = 50;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();
		for(showChar = 50; showChar < content.length; showChar++){
			if(content.charAt(showChar) == ' ')
				break;
		}
		if(content.length > showChar) {
			var c = content.substr(0, showChar);
			var h = content.substr(showChar, content.length - showChar + 1);
			var html = c + '<span class="moreelipses">' + ellipsestext + '</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">'+moretext+'</a></span>';
			$(this).html(html);
		}
	});		
	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
	//End of "more" to expand texts
}
function aaa(gid){
	var id = $("#" + gid).attr('checked');
	if(id == true) {	
		 $(".basic ." + gid).show();
		 //Something changed
	}else{
		 $(".basic ." + gid).hide();
		 $('#tranc input[type=checkbox]').each(function(index) {
			 if($(this).attr("class") == gid){
				$($(this)).removeAttr('checked');
				$(".basic ." + $(this).attr("id")).hide();
			 }
		});
	}
}

/*  Demo  4 ********************/
$(document).ready(function(){
	$('ol.sortable').nestedSortable({
		disableNesting: 'no-nest',
		forcePlaceholderSize: true,
		handle: 'div',
		helper:	'clone',
		items: 'li',
		maxLevels: 3,
		opacity: .6,
		placeholder: 'placeholder',
		revert: 250,
		tabSize: 25,
		tolerance: 'pointer',
		toleranceElement: '> div'
	});
});
 var str;
$(function(){
	$("#sortable1,#sortable2 ul").sortable({
		connectWith: "#sortable1"
		
	}).disableSelection();
});
</script>
</html>