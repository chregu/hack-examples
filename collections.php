<?hh

function CollectionDemo( Vector<int> $nums,
              Set<string> $names,
              Map<int,string> $numNameMap,
              ImmVector<int> $nums2): bool {

    foreach($nums as $num) {
        $mappedName = $numNameMap[$num];
        if ($names->contains($mappedName)) {
            return true;
        }
    }
    if ($nums2->count() == 0) return true;
    return false;
}

function main3() {
    $vector = Vector {1, 2, 3};
    $set = Set {"foo", "bar", "baz"};
    $map = Map { 1 => "hello", 2 => "world" , 3 => "baz"};
    $frozen = ImmVector{5,6};
    var_dump(CollectionDemo($vector, $set, $map, $frozen));
}

main3();

