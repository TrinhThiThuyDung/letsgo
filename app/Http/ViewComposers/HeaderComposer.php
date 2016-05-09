<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Service\UserServiceFacade;
use App\Models\Service\NoticationServiceFacade;

class HeaderComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $user;
    protected $notis;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Request $request)
    {
        // Dependencies automatically resolved by service container...
        if ($request->session()->get('id')) {
            $this->user_id = $request->session()->get('id');    
        }
    }
     protected function getNoticationOfUser()
    {
        return NoticationServiceFacade::getNoticationOfUser( $this->user_id );
    }
    /**
     *Get infor of user
     *@param Request: get id of user saved in session
     *@return object contain information of user
     */
    protected function getInforUser()
    {
        return UserServiceFacade::getInforUser( $this->user_id );
    }
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->user = $this->getInforUser();
        $this->noti   = $this->getNoticationOfUser();
        $this->user->user_id = $this->user_id;

        $array_data = ['user'   => $this->user, 'noti' => $this->noti ];

        $view->with( 'array_data', $array_data );
    }
}