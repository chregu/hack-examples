<?hh

class Value<T> {
    public function __construct(protected T $value) {
    }

    public function getValue(): T {
        return $this->value;
    }
    public function addString(string $bar) {
    }
}

function main2() {
    $st = new Value("TestString");
    $st->addString($st->getValue());

    $st = new Value(42);
    //errors out, since getValue returns int
    //$st->addString($st->getValue());
}

main2();

