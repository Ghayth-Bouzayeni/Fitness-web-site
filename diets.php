
<link rel="stylesheet" href="diets stylesheet.css">

<link rel="stylesheet" href="HOME style sheet.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela Round">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitHub-diets</title>
</head>

<body>
<div id="part1">
        <header>
            <a href="Home page.php" class="firstimage"><img src="422910295_1889582714791570_4471416509259206767_n.png"
                    alt="" class="title"></a>
        </header>
        <nav>
            <hr class="navbar-outline">
            <ul class="navbar">
                <li class="first"><a href="Home page.php"> HOME </a></li>
                 <?php
                session_start();
                    if (isset($_SESSION['user_id'])) {
                       
                        echo '<li class="nav-li"><a href="logout.php"> LOGOUT </a></li>';
                    } else {
                        /*echo"yesss";*/
                        echo '<li class="nav-li"><a href="login.php"> LOGIN </a></li>';
                    }
                ?>

                <li class="nav-li"><a href="https://www.google.com/maps/search/ensi/@36.8138887,10.0611841,17z/data=!3m1!4b1?entry=ttu" target="_blank"> LOCATIONS </a></li>
                <li class="nav-li"><a href="classes\classes.php"> CLASSES </a></li>
                <li class="nav-li"><a href="diets.php"> DIETS </a></li>
                <li class="nav-li"><a href="quick-test.php"> QUICK TEST </a></li>
                <li class="nav-li"><a href="blog.php"> BLOG </a></li>
                <li class="nav-li"> <img class="search-icon" src="search icon.png" alt=""></li>
                <li class="nav-li"> <input type="text" placeholder="search" class="search-bar"></li>
            </ul class="navbar">
            <hr class="navbar-outline">
        </nav>
    </div>
    <div class="diets">
        <div class="diet1">
            <p class="diet-title">Mediterranean Diet</p>
            <div class="layer1">
                <img src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/health/wp-content/uploads/2021/05/Best_Diets-_Mediterrnean_Diet.jpeg"
                    loading="lazy" alt="Mediterranean Diet" class="card-image">
                <div class="layer2">
                    <ul>
                        <li>Fresh fruits and vegetables</li>
                        <li>Whole grains, nuts and legumes</li>
                        <li>Fish</li>
                        <li>Extra virgin olive oil</li>
                    </ul>
                    <div class="layer3">
                        <a href="https://www.healthline.com/nutrition/mediterranean-diet-meal-plan" target="_blank" rel="nofollow" data-cta-text="Learn More" class="learntext">Learn
                            More <span class="arrow">&rarr;</span></a>
                        <p class="undertext">About WeightWatcher's Mediterranean Meals</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="left-wrap flex justify-center">
                    <div class="rating-logo"><img
                            src="https://www.forbes.com/health/wp-content/themes/fadvuk/assets/images/advisor-health/health-logo-v2.svg"
                            loading="lazy"></div>
                </div>

            </div>
            <div class="extendable-list">
                <div>
                    <div class="extendable" onclick="toggleMessage(this.parentNode)">
                        Why We Picked It
                        <img src="down arrow.png" class="downarrow">
                        <img src="up arrow.png" class="uparrow">
                    </div>
                    <p class="infotext">Inspired by the traditional eating patterns of southern Italy and Greece, the
                        Mediterranean diet
                        is
                        deemed “the gold standard in preventive medicine,” due to its “harmonic combination” of
                        antioxidants
                        and anti-inflammatory properties, according to a review of studies[1]. Rich in fresh fruit,
                        vegetables, legumes, whole grains and fish, this diet yields health benefits, including
                        increased
                        life expectancy, reduced risk of chronic disease and improved quality of life. What’s more, the
                        Mediterranean diet is easy to adopt, thanks to its slew of resources—which range from supportive
                        apps to meal delivery services.

                        “It’s not surprising that the Mediterranean diet ranked number one,” says Jackie Newgent , a
                        registered dietitian, Forbes Health Advisory Board member and panelist for our best diets
                        ranking.
                        “First, it’s not a ‘diet’ as we have come to think of diets; it’s a lifestyle. Following it
                        means
                        you will be selecting foods that are fresh and wholesome—and you’ll have plenty of flexibility.
                        Because it’s designed more as an eating lifestyle, it doesn’t lead to ‘yo-yo’ dieting. There are
                        no
                        ‘good’ or ‘bad’ food lists to choose from.”</p>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Pros & Cons
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <div class="infotext">
                    <div class="pros-cons-wrapper">
                        <div class="list-points-pros">
                            <ul>
                                <li>Reduced risk of chronic disease</li>
                                <li>Doesn’t require calorie counting or rigorous restrictions</li>
                                <li>Allows for a low to moderate amount of red wine</li>
                                <li>Compatible with vegetarian lifestyles</li>
                            </ul>
                        </div>
                        <div class="list-points-cons">
                            <ul>
                                <li>Lack of clear guidance on red and processed meat consumption</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Additional Information
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <p class="infotext">The Mediterranean diet recommends filling your plate with fresh fruits, vegetables,
                    nuts and legumes,
                    with moderate portions of fish and shellfish for protein. </p>
            </div>
            <hr>
        </div>
    </div>
    <div class="diets">
        <div class="diet1">
            <p class="diet-title">DASH Diet</p>
            <div class="layer1">
                <img src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/health/wp-content/uploads/2021/05/DASH_DIET.jpeg"
                    loading="lazy" alt="Mediterranean Diet" class="card-image">
                <div class="layer2">
                    <ul>
                        <li>Grains</li>
                        <li>Meat, poultry, fish</li>
                        <li>Fruit and vegetables</li>
                    </ul>
                    <div class="layer3">
                        <a href="https://www.nhlbi.nih.gov/education/dash-eating-plan" target="_blank" rel="nofollow" data-cta-text="Learn More" class="learntext">Learn
                            More <span class="arrow">&rarr;</span></a>
                        <p class="undertext">About WeightWatcher's Mediterranean Meals</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="left-wrap flex justify-center">
                    <div class="rating-logo"><img
                            src="https://www.forbes.com/health/wp-content/themes/fadvuk/assets/images/advisor-health/health-logo-v2.svg"
                            loading="lazy"></div>
                </div>

            </div>
            <div class="extendable-list">
                <div>
                    <div class="extendable" onclick="toggleMessage(this.parentNode)">
                        Why We Picked It
                        <img src="down arrow.png" class="downarrow">
                        <img src="up arrow.png" class="uparrow">
                    </div>
                    <p class="infotext">The DASH (Dietary Approaches to Stop Hypertension) diet was designed
                        specifically with heart health in mind. It takes a low-sodium approach to eating, and studies
                        show the DASH diet effectively lowers blood pressure and “bad” LDL cholesterol[2]. “You may find
                        it harder to eat out with the reduced sodium … and cooking without adding salt may be more
                        challenging as well, but adding in spices and herbs can make this diet even healthier,” says
                        Melina Jampolis, M.D, a board-certified physician nutritionist, Forbes Health Advisory Board
                        member and panelist for our best diets ranking.</p>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Pros & Cons
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <div class="infotext">
                    <div class="pros-cons-wrapper">
                        <div class="list-points-pros">
                            <ul>
                                <li>Can lower blood pressure and “bad” cholesterol</li>
                                <li>Restricts foods high in saturated fats</li>
                                <li>Designed for heart health</li>
                            </ul>
                        </div>
                        <div class="list-points-cons">
                            <ul>
                                <li>Lack of focus on seafood and fatty fish</li>
                                <li>Some of the daily carbs may not be suitable for people with diabetes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Additional Information
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <p class="infotext">The DASH diet recommends meals rich in fruits, vegetables and low-fat dairy and
                    limited in saturated fat. On the DASH diet, you use a chart to estimate your daily calorie needs,
                    which are then used to figure out how many servings from each food group you should have. </p>
            </div>
            <hr>
        </div>
    </div>
    <div class="diets">
        <div class="diet1">
            <p class="diet-title">Flexitarian Diet</p>
            <div class="layer1">
                <img src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/health/wp-content/uploads/2023/04/flexitarian.jpeg.jpg"
                    loading="lazy" alt="Mediterranean Diet" class="card-image">
                <div class="layer2">
                    <ul>
                        <li>Vegetables</li>
                        <li>Fruits</li>
                        <li>Legumes</li>
                        <li>Whole grains</li>
                        <li>Dairy, eggs</li>
                        <li>Occasional meat</li>
                    </ul>
                    <div class="layer3">
                        <a href="https://health.clevelandclinic.org/what-is-the-flexitarian-diet" target="_blank" rel="nofollow" data-cta-text="Learn More" class="learntext">Learn
                            More <span class="arrow">&rarr;</span></a>
                        <p class="undertext">About WeightWatcher's Mediterranean Meals</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="left-wrap flex justify-center">
                    <div class="rating-logo"><img
                            src="https://www.forbes.com/health/wp-content/themes/fadvuk/assets/images/advisor-health/health-logo-v2.svg"
                            loading="lazy"></div>
                </div>

            </div>
            <div class="extendable-list">
                <div>
                    <div class="extendable" onclick="toggleMessage(this.parentNode)">
                        Why We Picked It
                        <img src="down arrow.png" class="downarrow">
                        <img src="up arrow.png" class="uparrow">
                    </div>
                    <p class="infotext">For those who want to reap the benefits of a plant-based eating plan, but don’t
                        feel like they can or want to commit to giving up that slab of bacon at brunch quite yet, the
                        flexitarian diet might be a good fit. Described by the International Food Information Council as
                        a “semi-vegetarian, plant-forward diet,” the flexitarian diet emphasizes plant-based foods (like
                        fruits, vegetables and legumes) dairy and eggs, and recommends less frequent and/or smaller
                        portions of meat. The organization notes that emerging research suggests this way of eating may
                        have benefits ranging from weight management to reduced risk of cardiovascular disease and
                        diabetes.</p>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Pros & Cons
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <div class="infotext">
                    <div class="pros-cons-wrapper">
                        <div class="list-points-pros">
                            <ul>
                                <li>Allows for flexibility and the occasional serving of meat</li>
                                <li>Does not require calorie counting</li>
                                <li>Easy to follow</li>
                            </ul>
                        </div>
                        <div class="list-points-cons">
                            <ul>
                                <li>Lack of clear guidance on red and processed meat restrictions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Additional Information
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <p class="infotext">This eating plan encourages followers to think about what can be added to their
                    plate, as opposed to what should be taken away, according to the International Food Information
                    Council. </p>
            </div>
            <hr>
        </div>
        <div class="diet1">
            <p class="diet-title">WeightWatchers</p>
            <div class="layer1">
                <img src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/health/wp-content/uploads/2023/01/WW_Logo-No-Background-1.png"
                    loading="lazy" alt="WeightWatchers" class="card-image ">
                <div class="layer2">
                    <ul>
                        <li>Fresh fruit</li>
                        <li>Non-starchy vegetables</li>
                        <li>Lean protein</li>
                    </ul>
                    <div class="layer3">
                        <a href="https://www.weightwatchers.com/nl/" target="_blank" rel="nofollow" data-cta-text="Learn More" class="learntext">Learn
                            More <span class="arrow">&rarr;</span></a>
                        <p class="undertext">About WeightWatcher's Mediterranean Meals</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="left-wrap flex justify-center">
                    <div class="rating-logo"><img
                            src="https://www.forbes.com/health/wp-content/themes/fadvuk/assets/images/advisor-health/health-logo-v2.svg"
                            loading="lazy"></div>
                </div>

            </div>
            <div class="extendable-list">
                <div>
                    <div class="extendable" onclick="toggleMessage(this.parentNode)">
                        Why We Picked It
                        <img src="down arrow.png" class="downarrow">
                        <img src="up arrow.png" class="uparrow">
                    </div>
                    <p class="infotext">If you like the structure of commercial diets, WW (Weight Watchers) is the top
                        pick. A number of our panelists noted the diet’s robust support network, which ranges from
                        weekly meetings to a booming online community. Instead of focusing on restricting certain foods,
                        it emphasizes moderation, making it much more manageable than other diet programs.

                        “WW has evolved over the years with the research,” says Toby Amidor, a registered dietitian,
                        Forbes Health Advisory Board member and a panelist on our ranking. “Its latest WW+ program
                        provides individualized recommendations for diet, as well as lifestyle factors including
                        stress/mindset, sleep and physical activity. The diet portion is inclusive of all the food
                        groups, and emphasizes wholesome foods including fruits, vegetables and whole grains. For folks
                        who like to track their points/food, it’s a potentially healthful program for them.”</p>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Pros & Cons
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <div class="infotext">
                    <div class="pros-cons-wrapper">
                        <div class="list-points-pros">
                            <ul>
                                <li>No foods are “off limits”</li>
                                <li>Strong support network</li>
                                <li>Program boasts long list of “zero point” foods you can eat anytime</li>
                            </ul>
                        </div>
                        <div class="list-points-cons">
                            <ul>
                                <li>Meetings could be difficult to keep up with long term</li>
                                <li>Foods high in saturated fats and sugar have high point values</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Additional Information
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <p class="infotext">Our reviewer lost 5 pounds after trying WW for four weeks. Read our full Weight
                    Watchers (WW) reviewto learn more about our experience. </p>
            </div>
            <hr>
        </div>
        <div class="diet1">
            <p class="diet-title">Flexitarian Diet</p>
            <div class="layer1">
                <img src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/health/wp-content/uploads/2023/04/flexitarian.jpeg.jpg"
                    loading="lazy" alt="Mediterranean Diet" class="card-image">
                <div class="layer2">
                    <ul>
                        <li>Vegetables</li>
                        <li>Fruits</li>
                        <li>Legumes</li>
                        <li>Whole grains</li>
                        <li>Dairy, eggs</li>
                        <li>Occasional meat</li>
                    </ul>
                    <div class="layer3">
                        <a href="https://health.clevelandclinic.org/what-is-the-flexitarian-diet" target="_blank" rel="nofollow" data-cta-text="Learn More" class="learntext">Learn
                            More <span class="arrow">&rarr;</span></a>
                        <p class="undertext">About WeightWatcher's Mediterranean Meals</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="left-wrap flex justify-center">
                    <div class="rating-logo"><img
                            src="https://www.forbes.com/health/wp-content/themes/fadvuk/assets/images/advisor-health/health-logo-v2.svg"
                            loading="lazy"></div>
                </div>

            </div>
            <div class="extendable-list">
                <div>
                    <div class="extendable" onclick="toggleMessage(this.parentNode)">
                        Why We Picked It
                        <img src="down arrow.png" class="downarrow">
                        <img src="up arrow.png" class="uparrow">
                    </div>
                    <p class="infotext">For those who want to reap the benefits of a plant-based eating plan, but don’t
                        feel like they can or want to commit to giving up that slab of bacon at brunch quite yet, the
                        flexitarian diet might be a good fit. Described by the International Food Information Council as
                        a “semi-vegetarian, plant-forward diet,” the flexitarian diet emphasizes plant-based foods (like
                        fruits, vegetables and legumes) dairy and eggs, and recommends less frequent and/or smaller
                        portions of meat. The organization notes that emerging research suggests this way of eating may
                        have benefits ranging from weight management to reduced risk of cardiovascular disease and
                        diabetes.</p>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Pros & Cons
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <div class="infotext">
                    <div class="pros-cons-wrapper">
                        <div class="list-points-pros">
                            <ul>
                                <li>Allows for flexibility and the occasional serving of meat</li>
                                <li>Does not require calorie counting</li>
                                <li>Easy to follow</li>
                            </ul>
                        </div>
                        <div class="list-points-cons">
                            <ul>
                                <li>Lack of clear guidance on red and processed meat restrictions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Additional Information
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <p class="infotext">This eating plan encourages followers to think about what can be added to their
                    plate, as opposed to what should be taken away, according to the International Food Information
                    Council. </p>
            </div>
            <hr>
        </div>
        <div class="diet1">
            <p class="diet-title">Vegetarian Diet</p>
            <div class="layer1">
                <img src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/health/wp-content/uploads/2022/07/vegetarian.jpeg.jpg"
                    loading="lazy" alt="Vegetarian Diet" class="card-image ">
                <div class="layer2">
                    <ul>
                        <li>Vegetables</li>
                        <li>Fruits</li>
                        <li>Grains</li>
                        <li>Legumes</li>
                        <li>Nuts and seeds</li>
                    </ul>
                    <div class="layer3">
                        <a href="javascript:void(0);" rel="nofollow" data-cta-text="Learn More" class="learntext">Learn
                            More <span class="arrow">&rarr;</span></a>
                        <p class="undertext">About WeightWatcher's Mediterranean Meals</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="left-wrap flex justify-center">
                    <div class="rating-logo"><img
                            src="https://www.forbes.com/health/wp-content/themes/fadvuk/assets/images/advisor-health/health-logo-v2.svg"
                            loading="lazy"></div>
                </div>

            </div>
            <div class="extendable-list">
                <div>
                    <div class="extendable" onclick="toggleMessage(this.parentNode)">
                        Why We Picked It
                        <img src="down arrow.png" class="downarrow">
                        <img src="up arrow.png" class="uparrow">
                    </div>
                    <p class="infotext">The classic vegetarian diet snags a spot on our ranking, earning high marks for
                        its safety and ability to boost heart health, as well as for being a particularly healthy option
                        for people with diabetes. Additionally, research has found that a lifelong adherence to to a
                        vegetarian diet was associated with a 35% lower risk of developing diabetes, and those who
                        adopted a vegetarian diet after being non-vegetarian had a 53% lower risk of developing the
                        condition compared to non-vegetarians[5].

                        “A vegetarian diet is a terrific approach to get more plants into your eating plan, which is a
                        key reason why it’s a diet winner,” says Newgent. “While there are several types of vegetarian
                        diets, the most popular is a lacto-ovo vegetarian diet, which includes dairy and eggs—making it
                        easier to follow and meet nutritional needs than if going vegan or 100% plant-based.”

                        “For people who dine out or travel frequently, or who have a chaotic work or family schedule, a
                        vegetarian diet offers plenty of flexibility,” she adds. “There are no detailed food charts,
                        nonsensical food avoidance lists or ‘rules,’ or specific meal timing to worry about. And pizza
                        is included!”</p>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Pros & Cons
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <div class="infotext">
                    <div class="pros-cons-wrapper">
                        <div class="list-points-pros">
                            <ul>
                                <li>Good pick for people with diabetes</li>
                                <li>Flexibility, as some subtypes allow for eggs and dairy products</li>
                                <li>Research shows that eating lacto-ovo vegetarian is helpful for weight management,
                                    according to experts</li>
                            </ul>
                        </div>
                        <div class="list-points-cons">
                            <ul>
                                <li>More restrictive than other diets on this ranking</li>
                                <li>Some vegetarians may need to supplement with nutrients like iron or calcium</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="extendable-list">
                <div class="extendable" onclick="toggleMessage(this.parentNode)">
                    Additional Information
                    <img src="down arrow.png" class="downarrow">
                    <img src="up arrow.png" class="uparrow">
                </div>
                <p class="infotext">This diet is associated with lower risk of coronary artery disease and can protect
                    against GI tract cancers, according to Newgent.. </p>
            </div>
            <hr>
        </div>

    </div>
    <footer class="end">
        <div class="endl">
            <a href="Home page.php"><img src="422910295_1889582714791570_4471416509259206767_n.png" class="endpic"></a>
            <p class="copy">
                © 2024 The Limit

                All Rights Reserved</p>
        </div>
        <div class="endm">
            <div class="endmpic">
                <a href="https://www.facebook.com" target="_blank"><img src="facebook logo.png" class="endpics"></a>
                <a href="https://www.instagram.com" target="_blank"><img src="instagram logo.png" class="endpics"></a>
                <a href="https://www.tiktok.com" target="_blank"><img src="tiktok logo.png" class="endpics"></a>
            </div>
            <p class="endpar">contact us on facebook, instagram or tiktok</p>
        </div>
        <div>

        </div>
    </footer>
    <script src="diets.js">
    </script>
</body>
