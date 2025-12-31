<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $type = $request->input('type');
        $userInput = $request->input('prompt');
    $userPromptHotel = 'You are a marketing expert who works for luxury hotel brands. One of your clients is Hotel Penzance Collection, and they need to add some content to their website. They have asked for your help to adapt the text theyve added. Please read the content already on the site and provide suggestions on how they could change the content being added to make it align with the pages already on the site and have a cohesive tone and style across the site and pages.
        Content on site:
        Home Page: 
        Stay in one of our Hotel Penzance Collection Hotels or Houses 
        Choose your room in Hotel Penzance Harbour View, Hotel Penzance Promenade or Beach Houses, Marazion
        The sea is the ever-present backdrop to most of our quality boutique accommodation offering the perfect place to unwind and relax in complete comfort. Enjoy panoramic views of Penzance Harbour and across Long Rock beach to the iconic St Michaels Mount in Marazion, with interiors inspired by these beautiful seascapes.

        All our tastefully refreshed rooms have en suite bathrooms, soft sheets and complete calm, while many enjoy uninterrupted sea views. Some are dog-friendly, whilst others have enough space for all the family. Additional beds and/or cots can be added upon prior request.
        The Beach Club Hotel, Large Panorama Bedroom
        Compare Rooms & Rates

        View rates and rooms in our range of boutique accommodation with sea views. Whether travelling as a solo traveller, couple or family our rooms are stylish, clean and available for all your needs. Choose to stay at Hotel Penzance Harbour View, Hotel Penzance Promenade or The Beach House in Marazion.
        COMPARE ROOMS & RATES
        room
        Hotel Penzance Harbour View

        Hotel Penzance Harbour View is a 4 Star townhouse hotel with a highly-acclaimed restaurant and swimming pool in the West of Cornwall. Originally two merchant houses in the 1920s and dating back to Edwardian times, the townhouse today combines traditional elegance with modern style and comfort. We even have our own guest host to ensure your stay is top-notch, from ensuring you have all you need, to sharing Cornwalls best-kept secrets.
        HARBOUR VIEW ROOMS
        Beach club hotel bedroom
        Hotel Penzance Promenade

        Hotel Penzance Promenade (formerly The Beach Club Hotel) has soaring sea views of Mounts Bay. From the Lizard Peninsula to Newlyn Harbour and across to St Michaels Mount. Most of our rooms overlook the sea, infused with its unique light.

        Find us in historic Penzance. Like the town, we are crafted by the coast and the generations of creatives it has inspired. The hotel walls are filled with works of original artists. Were nestled in the heart of the promenade, ten minutes from the centre.
        PROMENADE ROOMS
        Beach House Kitchen
        Beach Houses, Marazion

        Located above The Surf Club restaurant and inspired by the coastal beauty of Marazion, the first of our Beach Houses is The Beach House, a new stylish self-catering apartment, perfect for families of up to five to get together.

        With all your amenities taken care of, concentrate on quality time catching up and getting the good times rolling.
        THE BEACH HOUSE
        Dog-friendly accommodation

        At the Hotel Penzance Collection, we offer a range of dog-friendly accommodation in Penzance and Marazion from our boutique hotels to self-catering Beach Houses and apartments. 

        For a small additional charge we welcome well behaved dogs and offer a dog bed, bowls, poop bags and towel for when the Cornish weather is a little inclement. You can also opt for a luxury upgrade that includes a hamper for your best friend. 
        
        Blog Page:

        Penzance to Lamorna Cove – Why This South West Coast Path Stretch Belongs On Your List

        Stretch your legs and explore the rugged beauty of the Cornish Coast on this impressive stretch of the South West Path. Keep reading to discover why Penzance to Lamorna Cove is one of the best South West Coast Path walks in Cornwall, or check out other great walks in the area in our blog The best Salt Path Walks. 
        Route Overview: Distance, Difficulty and Highlights

        Covering just under six miles in total, walking from Hotel Penzance to Lamorna Cove is a challenging yet manageable way to spend a day exploring the coast. 

        The stretch from Penzance to Mousehole lets you find your stride, enjoying a gentle amble along the seafront, before you take things up a notch on the more challenging stretch from Mousehole to Lamorna. Here, the path becomes more undulating with rocky sections underfoot. 

        The walk only takes around two and a half to three hours to complete, but with stops for refreshments or even lunch, and time to soak up the stunning views at Kemyel Crease and Penzer Point, its easy to make a day of it. 

        There are numerous cafes in Mousehole where you can enjoy a drink and a slice of cake, while the café at Lamorna Cove is famous for its crab specialities and Cornish cream tea. 
        Stage 1: Penzance to Newlyn to Mousehole 

        The first section of the walk takes you from Penzance through Newlyn and on into Mousehole, a charming seaside village brimming with traditional Cornish character. 

        Youll head south past the docks and South Pier and round Battery Rocks, before taking the path towards Newlyn. Youll pass Wherrytown beach, backed by Newlyn Green and the Newlyn Art Gallery, should you wish to make an arty detour, and the Bolitho Gardens before reaching Newlyn.

        In Newlyn, youll see yachts and fishing boats bobbing in the water along Mounts Bay, but the town is also home to an art gallery and a good selection of pubs and restaurants if you need refreshments. 

        As you leave Newlyn, youll pass the lighthouse to Penlee Point before coming into Mousehole, a picturesque fishing village with a lovely harbour and sandy beach. Mousehole is also home to several art galleries, gift shops, cafés, and pubs, so you can have a pitstop before continuing to Lamorna Cove.
        Stage 2: Mousehole to Lamorna Cove 

        As you leave Moushole, the path becomes more challenging with a narrow, rocky single-track path through Kemyel Crease Nature Reserve. With short, steep sections, care is needed, especially near Penzer Point, but the payoff is stunning views of the coastline.

        The path in this section can be muddy and is uneven, so wearing stout footwear is recommended. 

        At just over two miles long, this section is much shorter, but due to the more challenging nature of the path, you should give yourself a good hour to reach Lamorna Cove. 
        Arriving at Lamorna Cove: Facilities, Parking and Safety Notes

        After traversing one of the rockier sections of the South West Path, youll arrive in Lamorna Cove. A hidden gem, it will captivate you with its rugged beauty, dramatic cliffs and crescent-shaped beach. Just be sure to check tide times, so you can make the most of the beach and stay safe.

        Known for its tranquility, there arent many facilities here, but you can get a delicious lunch at Lamorna Cove Café. Originally opened as an ice cream shop in the 1950s, it is now famed for its fresh crab specialties.
        Getting Back: Buses and Simple Returns 

        Although you can walk back the way you came, the M6 runs frequently between Mousehole, Newlyn and Penzance. While a more limited weekday 347 service takes you right to Lamorna village.
        Map, Wayfinding and Route Changes 

        Although the South West Path is well marked with National Trail acorn signposts guiding you along the way, you should also carry an OS map or have the map downloaded on your phone in case you do go off track. Its also helpful should there be any temporary diversion in place en route that you need to navigate around. 

        You can find out more about any planned diversions on the South West Coast Path website.  
        Extend Your Day: On to Porthcurno or Inland Stone Circles 

        To extend the walk from Lamorna Cove, continue along the coastal path to Porthcurno, where you can visit the famous Minack Theatre, one of the most magical outdoor theatres in the UK. From here, you can continue further from Porthcurno to Lands End and visit the most westerly point of England. 

        Or if youd prefer to head inland, visit the Merry Maidens, an ancient stone circle dating back to the Stone Age.

        Both options to extend the walk traverse tougher terrain with more rocky sections, so its best to wear stout footwear and take care with your footing. We also recommend researching the best routes on sites like Walking Britain before you set off.
        Where to Stay: Start Strong From Hotel Penzance 

        Hotel Penzance is the ideal base for a walking holiday in Cornwall. With close proximity to the promenade and stunning sea views, our hotel is perfectly positioned for you to make the most of the South West Coast Path in Penzance, as well as offering easy access to bus routes, for point-to-point routes.

        Whats more, at Hotel Penzance, you can relax with a post-walk dip in our heated outdoor pool, before enjoying a sumptuous meal in our restaurant and settling down for the evening in our comfortably appointed rooms. 

        
        Book Your Coastal Break 

        If youre keen to enjoy this route or other coastal walks from Penzance, book your break now.


        Content being added to Home Page: ' . $userInput . ' 

        When providing suggestions on how to improve the content being added to The Home Page, please only rewrite the content being added. ENSURE YOUR RESPONSE ONLY INCLUDES THE IMPROVED REWRITTEN CONTENT!!!';

    $userPromptSport='You are a marketing expert who works for University Sports Facilities. One of your clients is The University of Birminghams Sport and Fitness, and they need to add some content to their website. They have asked for your help to adapt the text theyve added. Please read the content already on the site and provide suggestions on how they could change the content being added to make it align with the pages already on the site and have a cohesive tone and style across the site and pages.
        Content on site:
        Sport Page:
        Discover a Sport
        Sport
        University of Birmingham
        With 56 sports to choose from and a huge range of fitness opportunities, there is something for everyone at the University of Birmingham no matter what your current fitness or ability level is!
        From American Football to Ultimate Frisbee, youre sure to find a sport that you love. Whether youre already playing hockey at national level or if you want to start a new sport, this is the perfect opportunity to discover your sporting passion.

        A
        American Football
        Archery
        Athletics & Cross Country
        Aussie Rules

        B
        Badminton
        Basketball (Mens)
        Basketball (Womens)
        Boxing
        Brazilian Jiu Jitsu

        C
        Cheerleading
        Cricket (Mens)
        Cricket (Womens)
        Cycling

        D
        Dodgeball

        E
        Equestrian

        F
        Fencing
        Football (Men’s)
        Football (Womens)

        G
        Gaelic Football
        Golf
        Gymnastics

        H
        Handball
        Hockey

        I
        Ice Hockey

        J
        Jiu Jitsu
        Judo

        K
        Karate
        Kayaking
        Korfball

        L
        Lacrosse
        Lifesaving
        
        M
        Motor Racing
        Mountaineering & Climbing

        N
        Netball
        Ninjutsu

        P
        Polo & Polocrosse
        
        R
        Rowing
        Rugby League
        Rugby Union (Men’s)
        Rugby Union (Women’s)

        S
        Sailing
        Snowsports
        Snooker & Pool
        Squash
        Surfing
        Swimming
        
        T
        Table Tennis
        Taekwondo
        Tennis
        Touch Rugby
        Trampolining
        Triathlon
        
        U
        Ultimate Frisbee
        
        V
        Volleyball
        
        W
        Water Polo
        Weightlifting
        Windsurfing
        Wing Chun Kung Fu

        Gym Facilities Page:

        Inside the Gym
        Membership

        Sport & Fitness
        Inside the Gym

        The gym at University of Birmingham Sport & Fitness offers an unrivalled experience with a huge range of Technogym equipment.
        Upstairs gym area at Sport & Fitness - with lots of equipment including running machines. Along with the UoB Lion on the wall.	
        Sport & Fitness gym area with running machines.	

        Covering two levels, the upper floor contains a range of cardiovascular and resistance machines as well as an area for functional training and stretching. 

        Lower gym area in the Sport & Fitness gym.	

        The lower floor has an extensive range of free weights, Olympic lifting platforms, cable machines and cardio machines for warming up. The gym overlooks the 50-metre swimming pool and has a light, spacious feel.
        More space for your potential

        Plan ahead by taking a look at our quietest times in the gym – getting the most for your workouts.
        Sport and Fitness Gym heatmap showing busy and quiet times.	
        New for 25/26: The Vale

        Now included with your Sport and Fitness Gym membership is access to the brand new student-only 30+ station gym at The Vale.
        Find out more
        Join online & start using the UoB gym
        Join
        Gym Group Training

        These programmed sessions will add variety and all-round body conditioning to your workouts.

        

        

        Very different from group exercise classes, Gym Group Training is designed by personal trainers using cardio equipment, free weights, bodyweight and flexibility exercises.

        

        

        Available to members at Sport & Fitness – both student and non-student – who have classes included in their membership (inclusive membership).
        Timetable
        Gym instructor supporting a member in a group session.	
        Gym Instructor supporting a member in Sport & Fitness gym.	
        Personal Training
        Whether you’re training for an event, looking to lose weight or need to use exercise to manage a health condition, discover what you can achieve with one of our expert personal trainers.

            Bespoke 1-1 sessions
            Expert advice and support
            Lifestyle and nutrition planning

        Enquire now	
        Our Fitness Experts
        A headshot of Peter Antonio a Sport & Fitness Gym Instructor.
        Peter
        Senior Gym Instructor

        Fitness and Wellbeing Specialisms: Bodybuilding, Squash, Cycling and Running

        Peter has a BSc and MSc in Health, Nutrition and Fitness related subjects, and is a Registered Sports Nutritionist (AfN). He worked as a NHS Public Health Nutritionist for four years, with 13 years’ worth of experience in practicing, reading, and writing around meditation practice.

            07588 299468
            P.Antonio@bham.ac.uk

        Wayne Johnson, Gym Supervisor, UoB Sport & Fitness
        Wayne
        Gym Supervisor

        Fitness Specialisms: Physical Rehab, Return from Injury, Chronic Illnesses and Conditions

        Wayne has a background in Sports Therapy with over 10 years at Sport & Fitness. He’s worked with a range of clients of all ages and physical abilities to achieve a broad range of goals, through encouragement, motivation and goal setting.

            W.Johnson@bham.ac.uk

        A headshot of John De Crescenzo, a Sport & Fitness Gym Instructor.
        John
        Gym Supervisor

        Fitness Specialisms: Olympic Weightlifting, Strength & Conditioning

        John trains at Tiverton Gym and was the Strength and Conditioning coach at Coventry University, Warwick Sport and Sheffield Hallam University. With more than 10 years’ experience, he has a Masters in Sport & Exercise Science, is a UKSCA accredited Strength and Conditioning coach and holds a BWL Level 2 qualification.

            J.Crescenzo@bham.ac.uk

        A headshot of Vinay Gagan a Sport & Fitness Gym Instructor.
        Vinay
        Gym Instructor

        Fitness and Wellbeing Specialisms: Fat loss, nutrition & lifestyle coaching, weight training

        Struggling to lose body fat? Vinay offers over 15 years of experience in helping clients achieve sustainable results. By analysing your lifestyle, nutrition, and training, he creates a tailored plan that fits you - no extreme diets, just lasting results. Ready to take the next step? Book a consultation today and see how Vinay can help you reach your goals. Contact him via email below.

            v.gagan@bham.ac.uk

        A headshot of Simon Donovan, a Sport & Fitness Gym Instructor.
        Simon
        Gym Instructor

        Fitness Specialisms: Supporting clients with Type 2 Diabetes, Rheumatoid & Osteo Arthritis

        With 13 years here at Sport & Fitness, Simon has been a personal trainer since 2011, working with clients with a wide range of goals. He holds a first-class degree in Sport & Exercise Science as well as qualifications in Diabetes and Obesity management, Lower back pain and GP referral, and worked as a health wellbeing physiologist undertaking Corporate Health Assessments.

            07540 266621
            S.Donovan@bham.ac.uk

        A headshot of Janine Keeping, a Sport & Fitness Gym Instructor.
        Janine
        Gym Instructor

        Fitness Specialisms: Pre and Post Natal Qualification, Free Weights, Strength and Conditioning, General Toning, HiiT, Weightloss

        Since leaving the Army after 24 years of service, Janine decided to follow her passion for health and fitness by becoming a Personal Trainer. She has the ability to get the best out of people.

            07736 312635
            J.M.Keeping@bham.ac.uk

        A headshot of Mike Watson, a Sport & Fitness Gym Instructor.
        Michael
        Gym Instructor

        Fitness Specialisms: Technique, Short-time Workouts

        With 15 years’ experience, Michael has experimented with a variety of training techniques. His athletics background as a teenager focused on power building and movements.
        Dominika Lichwa-Muhwati, Gym Instructor
        Dominika
        Gym Instructor

        Fitness Specialisms: Injury Management and Rehabilitation of both active and chronic injuries, Strength and Conditioning for Sports Performance and Competition Preparation, and Pre- and Postnatal exercise

        Dominika has a degree in Sports Therapy, Level 3 Personal Training, and Crossfit Level 1. She has a wealth of experience, from competing herself as a National Level Swimmer, to coaching championship Rugby, exposing her to a variety of injuries and elite level strength and conditioning.

            d.lichwa@bham.ac.uk

        A headshot of Aidan Birch, a Sport & Fitness Gym Instructor.
        Aidan
        Gym Instructor

        Fitness Specialisms: Olympic Weightlifting, Strength/Power Training

        A national level competitor in Olympic Weightlifting for 10 years, Aidan has had an interest in bodybuilding and strength training since he was 16 years old. He was the former University of Birmingham Weightlifting club coach.
        Muscle and Weight Analysis
        State-of-the-art equipment is used to establish your overall body fat, muscle and water mass percentages, as well as its distribution around your body. This helps to track how your body reacts to improvements you make to your nutrition and exercise routine. Your height, weight and body mass index will also be measured.
        Enquire Now	
        Hands on a body composition machine	
        Member Benefits
        Join
        Premium Equipment

        200+ stations, including state-of-the-art energy saving treadmills, rowers, spin cycles and a dedicated free weights area
        Gym induction

        Coming to a new gym can be daunting, but we have a video induction plus an optional face-to-face induction for the gym including a special free-weights induction
        Free Programme

        Complete the Technogym Aspiration Map when you join as a community member, and our experts will create a programme suited to your goals
        Personal Training

        Exclusive access to Personal Training bolt-ons at Sport & Fitness. These are an additional cost, please speak with our Fitness Instructors to enquire.
        Gym Areas
        Upper Floor - Cardiovascular & Resistance Machines

            60+ cardiovascular stations, including state-of-the-art energy saving treadmills, rowers, stair climbers and cross-trainers to provide a varied workout
            Wide range of bikes including group cycles, upright and recumbent cycles, Wattbikes and immersive Technogym cycles.
            40+ strength equipment stations including full body resistance and cable machines.

        Lower Floor - Free Weights & Resistance Machines

            Exceptional free weights training facilities including nine lifting bay squat racks
            Three olympic standard benches
            Bench pull station
            Dumbbell station with wide variety of weight variations, up to 30kg.
            Seven adjustable weight benches, including incline and decline variations
            Multipower smith machine
            Assisted dip chin machine
            Target key muscle groups with the military shoulder press, preacher curl bench and standing leg curl stations.
            Environmental-conscious equipment is a key feature of the gym, including self-powered Skill Mills

        Your fitness journey starts now	
        Get Started

        Content being added to Pool Page: ' . $userInput . ' 

        When providing suggestions on how to improve the content being added to The Pool Page, please only rewrite the content being added. ENSURE YOUR RESPONSE ONLY INCLUDES THE IMPROVED REWRITTEN CONTENT!!!';


    $systemPrompt = 'You are a professional marketer working in advertising businesses. You are an expert in reflecting brand voice in the content you write for websites and can adapt your style to suit different tones and styles of webpages. Your responses to users should only include the rewritten content they have asked for, without any additional commentary or explanation. You should aim for your responses to be similar in length to the content provided by the user unless you strongly believe otherwise.';
    if ($type === 'HotelPenzance') {
        $userPrompt = $userPromptHotel;
    } elseif ($type === 'UBSport') {
        $userPrompt = $userPromptSport;
    } else {
        $userPrompt = $userInput;
    }    
    $response = Http::withToken(config('services.openai.key'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-5.1',
                'messages' => [
                    ['role' => 'system', 'content' =>   $systemPrompt],
                    ['role' => 'user', 'content' => $userPrompt],
                ],
            ]);

        return response()->json([
            'reply' => $response['choices'][0]['message']['content']
        ]);
    }
}