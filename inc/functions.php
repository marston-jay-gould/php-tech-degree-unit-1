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

/* 
Function printQuote passes the $quotes array into a nested function getRandomQuotes carrying the array $quotes
getRandomQuote then uses that same $quotes array, passed to it, to come up with a random number and a single data 
set from the array. getRandomQuote then returns that as a single $quote array.
printQuote then takes the returned $quote, loads it into $tempQuote and pulls out the individual items - the quote, 
the author of the quote, the year of the quote and the citation source of the quote.
An HTML string is the constructed using these 4 elements - but first validates that the citation and year exist. 
Finally, that string is passed through a call that is made at the end of the function to a value called $string which
will get used directly in the index.php, substiting for the fixed text. 


*/
function printQuote($quotes){

function getRandomQuote($quotes){

    $random_number = random_int(0,count($quotes)-1);
    $quote_keys = array_keys($quotes)[$random_number];
    $quote = $quotes[$quote_keys];
return $quote;
  }
  
$tempQuote = getRandomQuote($quotes);
$specific_quote = $tempQuote["quote"];
$quoted= $tempQuote["quoted"];
$quote_year = $tempQuote["quoteYear"];
$quote_citation = $tempQuote["quoteCitation"];
$quote_string = "<p class=\"quote\">" . $specific_quote . "</p><p class=\"source\">" . $quoted;
    if (isset($quote_citation)) {
        $quote_string = $quote_string . "<span class=\"citation\">" . $quote_citation . "</span>";
    }

    if (isset($quote_year)) { 
        $quote_string = $quote_string .  "<span class=\year\"></br>" . $quote_year . "</span>";
    }
    $quote_string = $quote_string . "</p>";
  
return $quote_string;

}
$string = printQuote($quotes);


// Create the printQuote function and name it printQuote



// create variable that calls getRandomQuote function, passing quotes as argument
// create varabile that initiates HTML
// using template in instructions, add the two default quote properties
// if quote contains a citation, add it 
// if quote contains year, add it  
// close string with necessary closing HTML tag 
// display complete HTML string 

?>
