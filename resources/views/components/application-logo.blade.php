<!-- resources/views/components/application-logo.blade.php -->
@props(['class' => 'h-9 w-auto text-gray-900 dark:text-gray-100'])

<svg
    {{ $attributes->merge(['class' => $class]) }}
    viewBox="0 0 140 28"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    role="img"
    aria-label="Luc Adams logo"
>
    <!-- Text-based mark so it stays crisp & lightweight -->
    <text x="0" y="20"
          font-family="ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace"
          font-size="20"
          font-weight="600"
          fill="currentColor">
        &lt;/LA&gt;
    </text>
</svg>
