<?php

use PHPUnit\Framework\TestCase;
use jugger\bootstrap\Badge;

class ModalTest extends TestCase
{
    public function testDropdown()
    {
        $this->assertEquals(
            new Modal([
                'id' => 'test',
                'button' => 'My text',
                'title' => 'My title',
                'content' => 'My content',
                'footer' => 'My footer',
            ]),
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#test'>My text</button>".
            "<div class='modal' id='test' tabindex='-1' role='dialog' aria-hidden='true'>".
            "<div class='modal-dialog' role='document'>".
            "<div class='modal-content'>".
            "<div class='modal-header'>".
            "<h5 class='modal-title'>My title</h5>".
            "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>".
            "<span aria-hidden='true'>&times;</span>".
            "</button>".
            "</div>".
            "<div class='modal-body'>My content</div>".
            "<div class='modal-footer'>My footer</div>".
            "</div>".
            "</div>".
            "</div>"
        );

        $this->assertEquals(
            new Modal([
                'large' => true,
                'button' => new Button('Test modal'),
                'title' => 'My large title',
                'content' => '...',
                'footer' => [
                    new PrimaryButton('Save'),
                    new DangerButton('Close', [
                        'data-dismiss' => modal,
                    ]),
                ],
            ]),
            "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-id-1'>My text</button>".
            "<div class='modal' id='modal-id-1' tabindex='-1' role='dialog' aria-hidden='true'>".
            "<div class='modal-dialog' role='document'>".
            "<div class='modal-content'>".
            "<div class='modal-header'>".
            "<h5 class='modal-title'>My title</h5>".
            "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>".
            "<span aria-hidden='true'>&times;</span>".
            "</button>".
            "</div>".
            "<div class='modal-body'>...</div>".
            "<div class='modal-footer'>".
            "<button type='button' class='btn btn-primary'>Save</button>".
            "<button type='button' class='btn btn-danger' data-dismiss='true'>Close</button>".
            "</div>".
            "</div>".
            "</div>".
            "</div>"
        );
    }
}
