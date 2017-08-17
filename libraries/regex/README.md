#RegEx
##Classes
	Matcher - main logic like (java.util.regex.Matcher)

##How to use
```php
	$yourPattern = "";
	$yourString = "";


	$matcher = new Matcher($yourPattern, $yourString);
	
	while($matcher->find()){
	 $mather->group(0); // return all match
         $mather->group(1); // return first group
	 $mather->group(2); // return second group
	 $mather->group($n);// return n-th group
	}
```
