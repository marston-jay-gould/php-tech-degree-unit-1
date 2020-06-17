<?php
// PHP - Monty Python Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

// Create a two dimenstional associated array 
// "quote" = actual quote 
// "quoted" = quoted person
// "quoteYear" = quote year if known
// "quoteCitation" = quote citation if known

$quotes = array(
    
    "Quote_1" => array( 

        "quote" => "We interrupt this program to annoy you and make things generally more irritating",
        "quoted" => "BBC Announcer",
        "quoteYear" => null,
        "quoteCitation" => "Monty Python's Flying Circus",
    ),

    "Quote_2" => array( 

        "quote" => "He's not the Messiah - he's a very naughty boy!",
        "quoted" => "Terry Jones as Mandy Cohen",
        "quoteYear" => 1979,
        "quoteCitation" => "Monty Python's Life of Brian",
    ),

    "Quote_3" => array( 

        "quote" => "Strange women lying in ponds, distributing swords, is no basis for a system of government!",
        "quoted" => "Michael Palin as Dennis",
        "quoteYear" => 1975,
        "quoteCitation" => "Monty Python and the Holy Grail",
    ),

    "Quote_4" => array( 

        "quote" => "The mill's closed. There's no more work. We\'re destitute. I'm afraid I have no choice but to sell you all for scientific experiments",
        "quoted" => "Michael Palin as Dad",
        "quoteYear" => 1983,
        "quoteCitation" => "Monty Python's Meaning of Life",
    ),

    "Quote_5" => array( 

        "quote" => "But kids were different in them days. They didn't have their heads filled with all this Cartesian Dualism!",
        "quoted" => "Michael Palin as Mrs Simmel",
        "quoteYear" => null,
        "quoteCitation" => "Monty Python's Flying Circus",
    ),

    "Quote_6" => array( 

        "quote" => "You Americans, all you do is talk, and talk, and say 'let me tell you something' and 'I just wanna say.' Well, you're dead now, so shut up!",
        "quoted" => "John Cleese as the Grim Reaper",
        "quoteYear" => 1983,
        "quoteCitation" => "Monty Python's Meaning of Life",
    ),

    "Quote_7" => array( 

        "quote" => "My brain hurts!",
        "quoted" => "John Cleese",
        "quoteYear" => null,
        "quoteCitation" => "Monty Python's Flying Circus",
    ),

    "Quote_8" => array( 

        "quote" => "There's nothing wrong with you that an expensive operation can't prolong.",
        "quoted" => "Graham Chapman as a surgeon",
        "quoteYear" => null,
        "quoteCitation" => "Monty Python's Flying Circus",
    ),

    "Quote_9" => array( 

        "quote" => "She's a witch! Burn her already!",
        "quoted" => "John Cleese as villager",
        "quoteYear" => 1975,
        "quoteCitation" => "Monty Python and the Holy Grail",
    ),

    "Quote_10" => array( 

        "quote" => "When you're walking home tonight and some great homicidal maniac comes after you with a bunch of loganberries, don't come crying to me!",
        "quoted" => "John Cleese",
        "quoteYear" => 1969,
        "quoteCitation" => "And Now for Something Completely Different",
    ),
);

// Create the getRandomQuote function and name it getRandomQuote


$random_number = random_int(0,9);
$quote_keys = array_keys($quotes)[$random_number];
$quote = $quotes[$quote_keys];
$specific_quote = $quote["quote"];
$quoted= $quote["quoted"];
$quote_year = $quote["quoteYear"];
$quote_citation = $quote["quoteCitation"];



// Create the printQuote function and name it printQuote



// create variable that calls getRandomQuote function, passing quotes as argument
// create varabile that initiates HTML
// using template in instructions, add the two default quote properties
// if quote contains a citation, add it 
// if quote contains year, add it  
// close string with necessary closing HTML tag 
// display complete HTML string 

?>