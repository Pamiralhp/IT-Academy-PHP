<?php
/*
- Exercise 5
Write a function to verify a student's grade according to the grade.

Conditions:

If the mark is 60% or more, the degree should be First Division.
If the grade is between 45% and 59%, the degree should be Second Division.
If the grade is between 33% and 44%, the grade should be Third Division.
If the grade is less than 33%, the student will fail.

*/

class GradeCategory{
    function category($grade){
        if($grade >= 60){
            return "First Division";
        }elseif($grade >= 45 ){
            return "Second Division";
        }elseif($grade >=33 ){
            return "Third Division";
        }else{
            return "The student failed";
        }
    }
}

?>