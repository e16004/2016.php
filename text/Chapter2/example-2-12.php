<?php
$_POST['comments'] = <<< _COMMENTS_
ダミーテキストとして有名な「Lorem Ipsum」ですが、Emmetにはこれを簡単に出力してくれる機能がついています。
出力方法はloremとlipsumで2パターンあり、どちらかを記述して展開すると「Lorem ipsum dolor sit amet, consectetur adipisicing elit. ～」という感じでダミーテキストが出力されます。
また、出力する際は単語数を指定することも可能で、例えば10単語だけ出力したい場合はlorem10というように、表示したい単語数を付けて展開すれば、先頭から10単語分のみLorem Ipsumを出力してくれます。
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
_COMMENTS_;

// Grab the first thirty characters of $_POST['comments']
print substr($_POST['comments'], 0, 100);
// Add an ellipsis
print '...';


