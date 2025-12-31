<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $prompt = 'You are a marketing expert who works for luxury hotel brands. One of your clients is [HOTEL NAME], and they need to add some content to their website. They have asked for your help to adapt the text theyve added. Please read the content already on the site and provide suggestions on how they could change the content being added to make it align with the pages already on the site and have a cohesive tone and style across the site and pages.
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


Content being added to Blog Page: ' . $request->input('prompt') . ' 

When providing suggestions on how to improve the content being added to The Blog Page, please only rewrite the content being added. ENSURE YOUR RESPONSE ONLY INCLUDES THE IMPROVED REWRITTEN CONTENT!!!';

        $response = Http::withToken(config('services.openai.key'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-5.1',
                'messages' => [
                    ['role' => 'system', 'content' =>   'You are a professional marketer working in advertising businesses. You are an expert in reflecting brand voice in the content you write for websites and can adapt your style to suit different tones and styles of webpages. Your responses to users should only include the rewritten content they have asked for, without any additional commentary or explanation.'],
                    ['role' => 'user', 'content' => $prompt],
                ],
            ]);

        return response()->json([
            'reply' => $response['choices'][0]['message']['content']
        ]);
    }
}