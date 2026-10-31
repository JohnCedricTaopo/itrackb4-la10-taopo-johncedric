## Lab Activity 10 Answers

### G1. Which column did you turn into a table, and why?

I turned the `element` column into an `elements` table because the same element names are repeated among different characters. An element is also a thing that could have its own details later, unlike rarity or the playable true-or-false value.

### G2. What number did Screenshot 6 show, and why exactly that number?

My Screenshot 6 showed 6 queries because I had five seeded characters. Eloquent first queried the characters table, then the view requested each character's element separately, making one original query plus five relationship queries. After adding `with('element')`, the count became 2.

### G3. What would break if the belongsTo method were plural?

The method must be named `element()` because one character belongs to one element. Eloquent uses that singular name to look for the `element_id` foreign key. If I named it `elements()`, Eloquent would look for the wrong relationship and `$character->element->name` would no longer work correctly.