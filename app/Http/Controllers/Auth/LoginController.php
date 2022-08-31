
    public function redirectPath()
    {
        if(auth()->user()->admin){
            return route('/events');
        }

        return route('/');
    }