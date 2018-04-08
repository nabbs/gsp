<?php
class PostsController extends AppController {
	var $name = 'Posts';

	function view($id = null) {
		if (!$id) {
			$this->_flash(__('Invalid Post.', true),'error');
			$this->redirect(array('action'=>'index'));
		}

		// save the comment
		if (!empty($this->data['Comment'])) {
			$this->data['Comment']['class'] = 'Post'; 
			$this->data['Comment']['foreign_id'] = $id; 
			$this->Post->Comment->create(); 
			if ($this->Post->Comment->save($this->data)) {
				$this->Session->setFlash(__('The Comment has been saved.', true),'success');
				$this->redirect(array('action'=>'view',$id));
			}
			$this->Session->setFlash(__('The Comment could not be saved. Please, try again.', true),'warning');
		}

		// set the view variables
		$post = $this->Post->read(null, $id); // contains $post['Comments']
		$this->set(compact('post'));
	}
}