<html>
    <?php
    $datetime = date ("Y-m-d H:i:s" , mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y'))) ;
    echo $datetime ;
    ?><p>
    <a href="{{ route('post.add') }}">Barry's message board</a><p>
</html>