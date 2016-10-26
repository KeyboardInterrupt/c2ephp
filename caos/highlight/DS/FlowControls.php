<?php

/// @cond INTERNAL_DOCS

/// @brief DS CAOS flow control (doif, else, loop, etc) dictionary
class DSCAOSFlowControls {
    /// @brief Returns an array of tokens.
    public static function GetTokens() {
        return array(
            'doif',
            'econ',
            'elif',
            'else',
            'enum',
            'endi',
            'endm',
            'epas',
            'esee',
            'etch',
            'ever',
            'goto',
            'gsub',
            'inst',
            'iscr',
            'loop',
            'next',
            'over', //wait until current agent anim is over...sounds like a flow control to me.
            'repe',
            'reps',
            'retn',
            'rscr',
            'scrp',
            'slow',
            'subr',
            'untl',
        );
    }
}
/// @endcond
?>
