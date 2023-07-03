<?php

namespace Exan\PhpFuck;

class Fucker
{
    private array $alphabet;

    public function __construct()
    {
        $this->alphabet['A'] = '@([].[])[' . $this->fuckInt(0) . ']';
        $this->alphabet['r'] = '@([].[])[' . $this->fuckInt(1) . ']';
        $this->alphabet['a'] = '@([].[])[' . $this->fuckInt(3) . ']';
        $this->alphabet['y'] = '@([].[])[' . $this->fuckInt(4) . ']';

        $this->alphabet['q'] = $this->alphabet['A'] . '^' . $this->fuckInt(0) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['p'] = $this->alphabet['A'] . '^' . $this->fuckInt(1) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['s'] = $this->alphabet['A'] . '^' . $this->fuckInt(2) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['r'] = $this->alphabet['A'] . '^' . $this->fuckInt(3) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['t'] = $this->alphabet['A'] . '^' . $this->fuckInt(5) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['w'] = $this->alphabet['A'] . '^' . $this->fuckInt(6) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['v'] = $this->alphabet['A'] . '^' . $this->fuckInt(7) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['y'] = $this->alphabet['A'] . '^' . $this->fuckInt(8) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['x'] = $this->alphabet['A'] . '^' . $this->fuckInt(9) . '.' . '@([][' . $this->fuckInt(0) . '])';

        $this->alphabet['Q'] = $this->alphabet['a'] . '^' . $this->fuckInt(0) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['S'] = $this->alphabet['a'] . '^' . $this->fuckInt(2) . '.' . '@([][' . $this->fuckInt(0) . '])';

        $this->alphabet['c'] = $this->alphabet['Q'] . '^' . $this->fuckInt(2) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['b'] = $this->alphabet['Q'] . '^' . $this->fuckInt(3) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['e'] = $this->alphabet['Q'] . '^' . $this->fuckInt(4) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['d'] = $this->alphabet['Q'] . '^' . $this->fuckInt(5) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['g'] = $this->alphabet['Q'] . '^' . $this->fuckInt(6) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['f'] = $this->alphabet['Q'] . '^' . $this->fuckInt(7) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['i'] = $this->alphabet['Q'] . '^' . $this->fuckInt(8) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['h'] = $this->alphabet['Q'] . '^' . $this->fuckInt(9) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['`'] = $this->alphabet['Q'] . '^' . $this->fuckInt(10) . '.' . '@([][' . $this->fuckInt(0) . '])';

        $this->alphabet['j'] = $this->alphabet['S'] . '^' . $this->fuckInt(9) . '.' . '@([][' . $this->fuckInt(0) . '])';

        $this->alphabet['Z'] = $this->alphabet['j'] . '^' . $this->fuckInt(0) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['['] = $this->alphabet['j'] . '^' . $this->fuckInt(1) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['X'] = $this->alphabet['j'] . '^' . $this->fuckInt(2) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['Y'] = $this->alphabet['j'] . '^' . $this->fuckInt(3) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['^'] = $this->alphabet['j'] . '^' . $this->fuckInt(4) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['_'] = $this->alphabet['j'] . '^' . $this->fuckInt(5) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['\\'] = $this->alphabet['j'] . '^' . $this->fuckInt(6) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet[']'] = $this->alphabet['j'] . '^' . $this->fuckInt(7) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['R'] = $this->alphabet['j'] . '^' . $this->fuckInt(8) . '.' . '@([][' . $this->fuckInt(0) . '])';

        $this->alphabet['k'] = $this->alphabet['['] . '^' . $this->fuckInt(0) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['o'] = $this->alphabet['['] . '^' . $this->fuckInt(4) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['n'] = $this->alphabet['['] . '^' . $this->fuckInt(5) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['m'] = $this->alphabet['['] . '^' . $this->fuckInt(6) . '.' . '@([][' . $this->fuckInt(0) . '])';
        $this->alphabet['l'] = $this->alphabet['['] . '^' . $this->fuckInt(7) . '.' . '@([][' . $this->fuckInt(0) . '])';
    }

    public function fuckInt(int $num): string
    {
        if ($num === 0) {
            return '+!![]';
        }

        if ($num < 0) {
            return '+!![]' . str_repeat('-![]', abs($num));
        }

        return str_repeat('+![]', $num);
    }

    function fuckString(string $input): string
    {
        $chars = [];
        $split = str_split($input);

        foreach ($split as $char) {
            $chars[] = isset($this->alphabet[$char])
                ? $this->alphabet[$char]
                : $this->getCodePointReplacement($char);
        }

        $chars = array_map(fn (string $char) => '(' . $char . ')', $chars);

        return implode('.', $chars);
    }

    public function fuckFunction(string $fn, array $args): string
    {
        return '(' . $this->fuckString($fn) . ')' . '(' . implode(',', $args) . ')';
    }

    private function getCodePointReplacement(string $char): string
    {
        $codePoint = mb_ord($char);

        return $this->fuckFunction('mb_chr', [$this->fuckInt($codePoint)]);
    }

    public function fuckCode(string $code): string
    {
        return '<?php eval(' . $this->fuckString($code) . ');';
    }
}
