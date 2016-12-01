<?php

namespace Visitor;

class ListVisitor extends Visitor
{
    /**
     * @var string
     */
    private $currentDir = '';

    /**
     * @param ElementInterface $element
     */
    public function visit(ElementInterface $element)
    {
        if ($element instanceof File) {
            $this->visitFile($element);
        } elseif ($element instanceof Directory) {
            $this->visitDirectory($element);
        } else {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @param File $file
     */
    private function visitFile(File $file)
    {
        printf("%s/%s\n", $this->currentDir, $file);
    }

    /**
     * @param Directory $directory
     */
    private function visitDirectory(Directory $directory)
    {
        printf("%s/%s\n", $this->currentDir, $directory);

        $saveDir = $this->currentDir;
        $this->currentDir = $this->currentDir . '/' . $directory->getName();

        foreach ($directory->iterator() as $entry) {
            $entry->accept($this);
        }

        $this->currentDir = $saveDir;
    }
}