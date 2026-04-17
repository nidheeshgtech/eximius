<?php

if (!function_exists('render_arrow_cta')) {
  /**
   * Render a reusable arrow + label CTA link.
   *
   * @param array<string, string> $options
   */
  function render_arrow_cta(array $options = []): void
  {
    $href = $options['href'] ?? '#';
    $label = $options['label'] ?? 'Learn more';
    $class = trim('ui-arrow-cta ' . ($options['class'] ?? ''));
    $iconClass = trim('ui-arrow-cta__icon ' . ($options['icon_class'] ?? ''));
    $labelClass = trim('ui-arrow-cta__label ' . ($options['label_class'] ?? ''));
    ?>
    <a class="<?= htmlspecialchars($class, ENT_QUOTES, 'UTF-8'); ?>"
      href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>">
      <span class="<?= htmlspecialchars($iconClass, ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
          <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
        </svg>
      </span>
      <span
        class="<?= htmlspecialchars($labelClass, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></span>
    </a>
    <?php
  }
}
