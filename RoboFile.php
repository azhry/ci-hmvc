<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    public function push($commitMessage, $origin = "origin", $branch = "master")
    {
    	$this->say("Pushing code to repository...");
    	$this->taskGitStack()
    		->stopOnFail()
    		->add('.')
    		->commit($commitMessage)
    		->push($origin, $branch)
    		->run();
    }

    public function pp($commitMessage, $origin = "origin", $branch = "master")
    {
        $this->say("Pushing code to repository...");
        $this->taskGitStack()
            ->stopOnFail()
            ->add('.')
            ->commit($commitMessage)
            ->pull($origin, $branch)
            ->push($origin, $branch)
            ->run();
    }

    public function test()
    {
        $this->say('TEST START');

        $cests = [ 'ApiCest', 'UserCest', 'AuthCest', 'TransactionCest' ];
        $exec = $this->taskExecStack()
                    ->stopOnFail();
        foreach ($cests as $cest)
        {
            $exec = $exec->exec('codecept run --steps api ' . $cest);
        }

        $exec->run();

        $this->say('TEST END');
    }

    public function apitest(array $cests)
    {
        $this->say('TEST START');

        $exec = $this->taskExecStack()
                    ->stopOnFail();
        foreach ($cests as $cest)
        {
            $exec = $exec->exec('codecept run --steps api ' . $cest);
        }

        $exec->run();

        $this->say('TEST END');
    }
}