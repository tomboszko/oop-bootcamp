<!-- Use Case #3

We are preparing three types of content for a website:
Articles
Ads
Vacancies
All of those have a title and text. When showing the title, 
they are modified as follows: articles remain as they are, 
ads are shown in all caps and vacancies are appended with " - apply now!". 
The original title should still be retrievable, 
so no modification is permanent.

Have an array with two articles, one ad and one vacancy. 
Use this array to show all content types (title + text).

Bonus: an article can be marked as "breaking news". 
If this is the case, the title is prepended with "BREAKING: 
". Extra bonus: display all the content with the appropriate html tags. -->

<?php
//  define class
class Content {
    public $title;
    public $text;
    public $type;
    public $breakingNews;

// constructor
    public function __construct( string $title, string $text, string $type, bool $breakingNews) {
        $this->title = $title;
        $this->text = $text;
        $this->type = $type; // added type to differenciate between articles, ads and vacancies.
        $this->breakingNews = $breakingNews;
    }
// method(s)
    public function getTitle() {
        if ($this->type == "article") {
            return $this->title;
        } elseif ($this->type == "ad") {
            return strtoupper($this->title);
        } elseif ($this->type == "vacancy") {
            return $this->title . " - apply now!";
        }
    }

    public function getText() {
        return $this->text;
    }

    public function getType() {
        return $this->type;
    }

    public function getBreakingNews() {
        return $this->breakingNews;
    }
}
// Instantiate object(s)
$article1 = new Content("Cosmic Insights", "Exploring the Mysteries of the Universe", "article", false);
$article2 = new Content("Future Visions", "Predictions for the Next Decade", "article", true);
$ad1 = new Content("Tech Horizon", "Innovations for a Better Tomorrow", "ad", false);
$vacancy1 = new Content("Starship Crew", "Join Our Galactic Exploration Team", "vacancy", false);
$article3 = new Content("AI Philosophy", "Ethics in the Age of Artificial Intelligence", "article", false);
$ad2 = new Content("Green Future", "Sustainable Solutions for a Healthier Planet", "ad", false);
$vacancy2 = new Content("Virtual Architect", "Designing the Digital World of Tomorrow", "vacancy", true);


// Create an array of contents
$contents = array($article1, $article2, $ad1, $vacancy1, $article3, $ad2, $vacancy2);

// Display list of contents BONUS: some styles

echo "<h1 style='font-size: 3rem; padding-top:2rem; padding-bottom:2rem; background-color: black; color: white; text-align: center;'>The galaxy Post</h1>";
echo "<div style='font-family: Arial, sans-serif; text-align: center;'>";
foreach ($contents as $content) {
    $title = $content->getTitle();
    $text = $content->getText();
    $type = $content->getType();
    $breakingNews = $content->getBreakingNews();
    if ($breakingNews == true) {
        $title = "<span style='color: red;'>BREAKING: " . $title . "</span>";
    }
    echo "<h2>" . $title . "</h2>";
    echo "<p>" . $text . "</p>";
    echo "<p><strong>Type:</strong> " . $type . "</p>";
    if ($breakingNews) {
        echo "<p style='color: red;'><strong>Breaking News!</strong></p>";
    }
    echo "<hr>";
}
echo "</div>";