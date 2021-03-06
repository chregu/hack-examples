<?hh

class Foo {

    //Typed properties (and scalar typehint)
    private int $num = 123;

    //Return typehints
    public function add(int $delta): Foo {
        $this->num += $delta;
        return $this;
    }

    public function get(): int {
        return $this->num;
    }

    // Constructor arg promotion
    public function __construct(private int $num): void {
    }
}

//needed, typechecker doesn't check in global space
function main() {

    $f = new Foo(123);
    $f->add(456);

    // gives error with hh_client
    //$f->add("banana");
}

main();
