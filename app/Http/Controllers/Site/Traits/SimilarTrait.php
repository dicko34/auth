<?php
namespace App\Http\Controllers\Site\Traits;
trait SimilarTrait
{
    public function similar($collection, $product, array $keys)
    {
        $sim = [];
        $data = $collection->toArray();
    
        // Check if there are enough items for comparison
        if (count($data) <= 1) {
            return $sim; // No need to perform similarity comparison
        }
    
        shuffle($data);
    
        foreach ($keys as $col => $percentge) {
            foreach ($data as $row) {
                if (!is_array($row)) {
                    // Debugging: Check if $row is not an array
                    continue;
                }
    
                if (!isset($row[$col])) {
                    // Debugging: Check if $col is a valid key in $row
                    continue;
                }
    
                $str2 = $row[$col];
    
                if ($row['id'] == $product['id']) {
                    continue;
                }
    
                similar_text($product[$col], $str2, $pr);
                round($pr) >= $percentge ? array_push($sim, $row) : '';
    
                if (count($sim) == 6) {
                    break;
                }
            }
        }
    
        return $sim;
    }
}    

?>