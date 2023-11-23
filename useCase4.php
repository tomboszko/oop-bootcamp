<!-- Use Case #4

There's two groups, both of 10 students. 
Every student has a name (even Jaqen) and gets a grade. 
You can have some fun coming up with the content here :-)

Provide an easy way to calculate the average score of a group.
Add a function to move a student from one group to another.
Show the average score of both groups. 
Move the top student from one group with the lowest scoring student from another.
 Show the averages again - how were these affected? -->

 <?php

// Define the Student class
class Student {
    public $name;
    public $grade;
    
    // Constructor
    public function __construct(string $name, float $grade) {
        $this->name = $name;
        $this->grade = $grade;
    }

    // Method to get the student's name
    public function getName() {
        return $this->name;
    }
}

// LatinGroup extends Student
class LatinGroup extends Student {
    private $group;

    public function __construct(string $name, float $grade) {
        parent::__construct($name, $grade);
        $this->group = 'Latin';
    }

    public function getGroup() {
        return $this->group;
    }
}

// MathGroup extends Student
class MathGroup extends Student {
    private $group;

    public function __construct(string $name, float $grade) {
        parent::__construct($name, $grade);
        $this->group = 'Math';
    }

    public function getGroup() {
        return $this->group;
    }
}

// Instantiate student list
$students = [];

// Create 10 LatinGroup and 10 MathGroup students
for ($i = 1; $i <= 20; $i++) {
    $name = "Student $i";
    $grade = rand(0, 20);
    if ($i <= 10) {
        // First 10 students in LatinGroup
        $students[] = new LatinGroup($name, $grade);
    } else {
        // Next 10 students in MathGroup
        $students[] = new MathGroup($name, $grade);
    }
}


// Function to calculate the average grade of a group of students
function calculateAverageGrade($students) {
    $totalGrade = 0;
    $numStudents = count($students);
    foreach ($students as $student) {
        $totalGrade += $student->grade;
    }
    return $totalGrade / $numStudents;
}

// Function to display a group of students
function displayGroup($students, $groupName) {
    $averageGrade = calculateAverageGrade($students);
    echo "<div style='flex: 1; margin: 1rem; padding: 1rem; background-color: #f0f0f0; border: 1px solid #ccc;'>";
    echo "<h2 style='text-align: center;'>$groupName Group - <span style='color: red;'>Average Grade: $averageGrade</span></h2>";
    foreach ($students as $student) {
        echo "<p><strong>Name:</strong> " . $student->getName() . "<br>";
        echo "<strong>Grade:</strong> " . $student->grade . "</p>";
    }
    echo "</div>";
}

// Separe students into Latin and Math groups
$groupLatin = array_filter($students, function($student) {
    return $student->getGroup() === 'Latin';
});
$groupMath = array_filter($students, function($student) {
    return $student->getGroup() === 'Math';
});

// Display students
echo "<div style='font-family: Arial, sans-serif; display: flex; justify-content: center;'>";
displayGroup($groupLatin, 'Latin');
displayGroup($groupMath, 'Math');
echo "</div>";
?>


