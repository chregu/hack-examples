<?hh
// does not work this way, see next slide

async function getPage($url) {
    $fp = fopen($url, 'r');
    await $fp;
    return stream_get_contents($fp);
}

$pages = await [
    getPage('http://php.net'),
    getPage('http://example.com'),
    getPage('http://hhvm.com'),
];
