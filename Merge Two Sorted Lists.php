<?php
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}
function mergeTwoLists($list1, $list2) {
    if ($list1 === null && $list2 === null)
        return $list1;
    if ($list2 === null)
        return $list1;
    if ($list1 === null)
        return $list2;

    $current = $list1;

    while ($current->next !== null)
        $current = $current->next;

    $current->next = $list2;

    $currNew = $list1;
    $arr = [];
    while($currNew !== null){
        $arr[] = $currNew->val;
        $currNew = $currNew->next;
    }
    sort($arr);

    $resNode = new ListNode();
    $tail = $resNode;
    foreach ($arr as $val) {
        $tail->next = new ListNode($val);
        $tail = $tail->next;
    }
    return $resNode->next;
}
$list1 = new ListNode(1, new ListNode(2, new ListNode(4)));
$list2 = new ListNode(1, new ListNode(3, new ListNode(4)));
print_r(mergeTwoLists($list1, $list2));