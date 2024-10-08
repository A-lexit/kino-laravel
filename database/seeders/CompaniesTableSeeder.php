<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            '1492 Pictures',
            '20th Century Fox',
            '3 Arts Entertainment',
            '3 in the Box',
            '5150 Action',
            '87Eleven',
            'A Band Apart',
            'AAC Kids',
            'ABC',
            'Abominable Pictures',
            'AFG Talons Productions',
            'Aggregate Films',
            'Alcon Entertainment',
            'Aldamisa Entertainment',
            'Alien Productions',
            'Alliance Communications Corporation',
            'Allied Filmmakers',
            'Allison Shearmur Productions',
            'Ambience Entertainment',
            'Amblin',
            'Amercent Films',
            'American Empirical Pictures',
            'American Entertainment Partners L.P.',
            'Amigos de Garcia Productions',
            'Anabasis N.V.',
            'Andrzej Bartkowiak Films',
            'Apatow Productions',
            'Apipoulai',
            'ARP Selection',
            'Artistes Associés',
            'Artists First',
            'AR-TL',
            'Astral Programming Enterprises',
            'Atman Entertainment',
            'Atmosphere Entertainment MM',
            'Avary',
            'Avi Arad Productions',
            'Babylonian Productions',
            'Bad Robot',
            'Balcor Film Investors',
            'Baltimore Pictures',
            'Baltimore Spring Creek Productions',
            'Battlefield Productions LLC',
            'Bays Thomas Productions',
            'BBC Wales',
            'Belisarius Productions',
            'Belvision',
            'BenderSpink',
            'Black Hangar Studios',
            'Black Rhino Productions',
            'Blackjack Films',
            'Blue Tulip Productions',
            'Bluebush Productions',
            'Blumhouse Productions',
            'Boies/Schiller Film Group',
            'Boy of the Year',
            'BPS Babelsberg Production ',
            'Brad Grey Pictures',
            'Braveworld Productions',
            'Bright/Kauffman/Crane Productions',
            'Brillstein-Grey Entertainment',
            'Broadway Pictures',
            'Brooklyn Films II',
            'C-2 Pictures',
            'Camelot Pictures',
            'Canal+',
            'Capella International',
            'Carolco Pictures',
            'Cartoon Network Studios',
            'Castle Rock Entertainment',
            'CBS',
            'Centre national du cinéma et de l’image animée (CNC)',
            'Challenge Film Corporation Entertainment',
            'Cheyenne Enterprises',
            'Chris Lee Productions',
            'Chum Television',
            'CINAR',
            'Ciné+',
            'Cinema 84',
            'Cinergi Pictures Entertainment Inc.',
            'Cinevent',
            'Cinevision',
            'Circus Production',
            'Clearwater Holdings',
            'Cloud Nine Entertainment',
            'Cold Spring Pictures',
            'Columbia Pictures',
            'Contrafilm',
            'Cruel and Unusual Films',
            'Cruise/Wagner Productions',
            'Crystal Sky Pictures',
            'Curiosity Company',
            'Current Entertainment',
            'Da Ma Produzione',
            'Dakota Pictures',
            'Dan Curtis Productions',
            'Dargaud',
            'Dark Horse Entertainment',
            'Davis Entertainment',
            'Davis-Films',
            'Davis-Panzer Productions',
            'DC Comics',
            'DefyNite Films',
            'Delphi',
            'Dentsu',
            'Di Bonaventura Pictures',
            'DIC Entertainment',
            'Digital Factory',
            'Dimension Films',
            'Distant Planet Productions Ltd.',
            'Don Carmody Productions',
            'Donners Company',
            'Doom Productions Ltd.',
            'Doozer Productions',
            'Dream Entertainment',
            'DreamWorks',
            'Dune Entertainment',
            'Eclipse Catering',
            'Eddie Murphy Productions',
            'El Corazon Producciones S.A.',
            'Elcajo Productions',
            'Electric Avenue',
            'EM.TV & Merchandising AG',
            'Emmett/Furla/Oasis Films (EFO Films)',
            'Envision Entertainment Corporation',
            'Epsilon Motion Pictures',
            'Erics Boy',
            'ESC Entertainment',
            'Euro Film Funding',
            'EuropaCorp',
            'Everyman Pictures',
            'Extrafilm Produktion',
            'Fair Film',
            'Fairview Entertainment',
            'Famous Studios',
            'Feigco Entertainment',
            'Film Workshop',
            'Filmauro',
            'FilmDistrict',
            'FilmEngine',
            'Filmline International Inc.',
            'Filmtribe',
            'Fireworks Entertainment',
            'Fireworks Pictures',
            'Five Star Feature Films',
            'Flynn Picture Company',
            'Forecast Pictures',
            'FPT Group',
            'FR3',
            'France 2 (FR2)',
            'France 3',
            'Franchise Pictures',
            'Fred Wolf Films',
            'Fremantle Productions',
            'Gary Nardino Productions',
            'Gary Sanchez Productions',
            'Gaumont',
            'Gene Deitch Associates',
            'Gerald Ray Studios',
            'GHS Productions KG',
            'GK Films',
            'Glen A. Larson Productions',
            'Gold/Miller Productions',
            'Goldcrest Pictures',
            'Golden Harvest Company Ltd.',
            'Good Machine',
            'Gordon Company',
            'GreeneStreet Films Inc.',
            'Grouper Production',
            'H2S2 Filmproduktionsgesellschaft',
            'Handmade Films Ltd.',
            'Hanna–Barbera',
            'Happy Madison',
            'Hartswood Films',
            'HBO',
            'Helena Productions',
            'Helkon Media AG',
            'Hemdale',
            'Herzog-Cowen Entertainment',
            'Hollywood Gang Productions',
            'Hollywood Pictures',
            'Hong Ying Animation Inc.',
            'Huayi Brothers Media',
            'Hughes Entertainment',
            'IDDH',
            'IF Entertainment',
            'Imagine Entertainment',
            'Indian Paintbrush',
            'Infinitum Nihil',
            'Ingenious',
            'Intermedia',
            'InterStar',
            'Island Pictures',
            'Ivory Way Productions',
            'J&M Entertainment',
            'Jack Kinney Productions',
            'Jax Media',
            'Jay Ward Productions',
            'Jerry Bruckheimer Films',
            'Jerry Weintraub Productions',
            'Jocko Productions',
            'John Wells Productions,',
            'JTP Films',
            'Judgemental Films',
            'Katalyst Films',
            'Keith Barish Productions',
            'Kennedy/Marshall',
            'King Features Syndicate',
            'Knickerbocker Films',
            'Knock Films A.V.V.',
            'Kurtzman/Orci',
            'Lakeshore Entertainment',
            'Larry Harmon Pictures',
            'Latina Pictures',
            'Laura Ziskin Productions',
            'Lawrence Gordon Productions ',
            'Le Grisbi Productions',
            'Leeloo Productions',
            'Legendary Pictures',
            'Les Productions ',
            'Les studios Idéfix',
            'Lightstorm Entertainment',
            'Linson Films',
            'Lionsgate',
            'LivePlanet',
            'Lorimar Television',
            'Loumolo GmbH & Co. KG',
            'Lucasfilm',
            'Lucky Comics',
            'M Prods',
            'Magnolia Pictures',
            'Major Studio Partners',
            'Mandeville Films',
            'Many Rivers Productions',
            'Maple Cage Productions',
            'Marc Platt Productions',
            'Mark Canton Productions',
            'Marvel',
            'Masterpiece Theatre',
            'MCA Television',
            'MDP Worldwide',
            'Mediastream Film GmbH & Co. Productions KG',
            'Metro-Goldwyn-Mayer',
            'MHF Zweite Academy Film',
            'Michael/Finney Productions',
            'Midway Games',
            'Mike Zoss Productions',
            'Millennium Films',
            'Mimran Schur Pictures',
            'Mirage',
            'Miramax Films',
            'MJW Films',
            'Monkeypaw Productions',
            'Morgan Creek',
            'Mosaic Media Group',
            'Mostow Liberman Production',
            'Moving Pictures',
            'Muse Productions',
            'Nancy Tenenbaum Films',
            'NBCUniversal',
            'Neal H. Moritz Productions',
            'New Line Cinema',
            'New Regency Pictures',
            'New World Pictures',
            'New Zealand Film Production Fund',
            'Newmarket Capital Group LLC',
            'Nickelodeon Movies',
            'Nimar Studios',
            'Nina Saxon Film Design',
            'Nintendo of America',
            'NPV Entertainment',
            'Nu Boyana Film Studios',
            'Nu Image',
            'O Entertainment',
            'Oak Productions',
            'Ocean Pictures',
            'OLC / Rights Entertainment',
            'Omnilab Media',
            'One Race',
            'Open Road Films',
            'Original Film',
            'Orion Pictures',
            'Other Angle Pictures',
            'Outlaw Productions',
            'Overbrook Entertainment',
            'P.A.C.',
            'P.C.M. Film',
            'Pacific Renaissance Pictures Ltd.',
            'Pacific Western Productions',
            'Paloma Films',
            'Palomar Pictures',
            'Paragon Films Ltd.',
            'Paramount',
            'Pariah',
            'Parkes/MacDonald Productions',
            'Patalex III Productions Limited',
            'Perfect Storm Entertainment',
            'Pet Fly Productions',
            'Phoenician Films',
            'Phoenix Pictures',
            'Picturemaker Productions',
            'Pit Bull Productions',
            'Plan B Entertainment',
            'Playmates Toys',
            'Police Academy Productions',
            'PolyGram FB286:B326ilmed Entertainment',
            'Practical Pictures',
            'Primrose Hill Productions',
            'Producers Sales Organization',
            'QC Entertainment',
            'Quincy Jones Entertainment',
            'Quincy Jones-David Salzman Entertainment',
            'Radiant Productions',
            'Rat Entertainment',
            'RatPac-Dune Entertainment',
            'RCH',
            'Reaper Productions LLC',
            'Red Hour Films',
            'Redeemable Features',
            'Regency',
            'Relativity Media',
            'Rembrandt Films/Halas and Batchelor',
            'Renaissance Pictures',
            'Reteitalia',
            'Revolution Studios',
            'Riff Raff Film Productions',
            'Rocket Science VFX',
            'Rogue',
            'Roth Kirschenbaum Films',
            'Rough Draft Studios',
            'Rox Productions',
            'Rysher Entertainment',
            'Safran Company',
            'Salter Street Films International',
            'Scott Free Productions',
            'Scott Rudin Productions',
            'Sean Bailey Productions',
            'Seasonal Film Corporation',
            'Section Eight',
            'Services GmbH',
            'Seven Arts Pictures',
            'Seven Bucks Productions',
            'Shady Acres Entertainment',
            'Shooting Star Entertainment',
            'Sidley Wright & Associates',
            'Silver Pictures',
            'Silverlight Ltd.',
            'SKA Films',
            'Skydance',
            'SLM Production Group',
            'Sneaky Shark',
            'SNL Studios',
            'Societe Nouvelle des Etablissements Gaumont (SNEG)',
            'Solaris',
            'Sony Pictures Entertainment',
            'Spyglass Entertainment',
            'St. Clare Entertainment',
            'Stephen J. Cannell Productions',
            'Stillking Films SRO',
            'Story Film',
            'Stu Segall Productions',
            'Studio B production',
            'Studio Babelsberg',
            'StudioCanal',
            'Studios USA Television',
            'Summit Entertainment',
            'Sunny Television Productions',
            'Surge Licensing',
            'Syncopy',
            'T Asset Acquisition Company LLC',
            'T5 Production',
            'TAFT Entertainment Pictures',
            'Talent Associates Ltd.',
            'Tall Trees Productions',
            'Tanlay',
            'Team Todd',
            'Ternion Pictures',
            'TF1 Films Production',
            'The Halcyon Company',
            'The Ladd Company',
            'The Montecito Picture Company',
            'The Turman-Foster Company',
            'The ULULU Company',
            'The Weinstein Company',
            'Threshold Entertainment',
            'Thunder Road Pictures',
            'TiMe Film- und TV-Produktions',
            'Todd McFarlane Entertainment',
            'Tollin/Robbins Productions',
            'Tooncan',
            'Touchstone',
            'TriBeCa Productions',
            'TriStar Pictures',
            'Troublemaker Studios',
            'TSG Entertainment',
            'U-Drive Productions',
            'USA Network',
            'Valhalla Motion Pictures',
            'Vengeance Productions Pty. Ltd.',
            'Viacom',
            'Victory Film',
            'Village Roadshow Pictures',
            'Virgin Produced',
            'Walt Disney Pictures',
            'Warner Bros.',
            'Wayans Bros. Entertainment',
            'Wessler Entertainment',
            'Wild Hogs Productions',
            'Wintergreen Productions',
            'Wonderland Sound and Vision',
            'Working Title Films',
            'World 2000 Entertainment',
            'Worldview Entertainment',
            'WV Films II',
            'Xilam Animation',
            'XYZ Funding N.V.',
            'Yitzak Ginzberg/Ehud Bleiberg Production',
            'Zide-Perry Productions',
            'Zoe Pictures',
            'Студія 95 квартал',
            'Невідомо',
        ];

        foreach ($titles as $title) {
            Company::create([
                'title' => $title,
            ]);
        }











        /* цей варіант вимагає вручну вказувати slug
                 $data =
                    [
                        'title' => 'Детективekkw',
                 'slug' => 'ggggggggw'

                ];

                DB::table('countries')->insert($data);*/


    }
}
