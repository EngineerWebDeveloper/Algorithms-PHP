/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val) {
        $result = new TreeNode(null,null,null);
        $pointer = $root;
        $found = false;
        while($pointer != null && !$found){
            if($pointer->val == $val){
                $found = true;
                $result->val = $val;
                $result->left = $pointer->left;
                $result->right = $pointer->right;
                
            }
            if($pointer->val > $val){
                $pointer = $pointer->left;
            }else{
                $pointer = $pointer->right;
            }
        }
        return $result;
    }
}
