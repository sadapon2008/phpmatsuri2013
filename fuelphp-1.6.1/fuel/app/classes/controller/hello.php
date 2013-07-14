<?php
class Controller_Hello extends Controller
{

	public function action_index()
	{
		return Response::forge(ViewModel::forge('hello/index'));
	}
}
