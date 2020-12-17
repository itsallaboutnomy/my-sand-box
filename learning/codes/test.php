<?php
function myGeneratorFunction()
{
    echo "One","\n";
    yield 'first return value';

    echo "Two","\n";
    yield 'second return value';

    echo "Three","\n";
    yield 'third return value';
}
$iterator = myGeneratorFunction();
 echo $iterator->current();
echo "\n";

 $iterator->next();
echo $iterator->current();

?>
