<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class StorePageContent
{
    public function __construct(
        private StorePageTemplate $template,
        private ?string $description = null,
        private ?string $title = null,
        private array $widgets = [],
    ) {
    }

    public function getTemplate(): StorePageTemplate
    {
        return $this->template;
    }

    public function setTemplate(StorePageTemplate $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getWidgets(): array
    {
        return $this->widgets;
    }

    public function setWidgets(array $widgets): self
    {
        $this->widgets = $widgets;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'template' => $this->template->value,
        ];

        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->title !== null) {
            $data['title'] = $this->title;
        }
        if ($this->widgets !== []) {
            $data['widgets'] = $this->widgets;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            template: StorePageTemplate::from($data['template']),
            description: $data['description'] ?? null,
            title: $data['title'] ?? null,
            widgets: $data['widgets'] ?? [],
        );
    }
}
