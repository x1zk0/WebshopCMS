{"filter":false,"title":"index.php","tooltip":"/index.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":51,"column":33},"end":{"row":51,"column":34},"action":"insert","lines":["a"],"id":4753}],[{"start":{"row":51,"column":34},"end":{"row":51,"column":35},"action":"insert","lines":["d"],"id":4754}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":1},"action":"insert","lines":["/"],"id":4755}],[{"start":{"row":31,"column":1},"end":{"row":31,"column":2},"action":"insert","lines":["*"],"id":4756}],[{"start":{"row":54,"column":2},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":4757}],[{"start":{"row":55,"column":0},"end":{"row":55,"column":1},"action":"insert","lines":["*"],"id":4758}],[{"start":{"row":55,"column":1},"end":{"row":55,"column":2},"action":"insert","lines":["/"],"id":4759}],[{"start":{"row":19,"column":0},"end":{"row":21,"column":31},"action":"remove","lines":["","use Doctrine\\ORM\\Tools\\Setup;","use Doctrine\\ORM\\EntityManager;"],"id":4760},{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":24,"column":31},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":4761}],[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":4762}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":4763}],[{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":4764}],[{"start":{"row":28,"column":0},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":4765}],[{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":4766}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":4767}],[{"start":{"row":31,"column":0},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":4768}],[{"start":{"row":32,"column":0},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":4769}],[{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":4770}],[{"start":{"row":34,"column":0},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":4771}],[{"start":{"row":35,"column":0},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":4772}],[{"start":{"row":36,"column":0},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":4773}],[{"start":{"row":37,"column":0},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":4774}],[{"start":{"row":38,"column":0},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":4775}],[{"start":{"row":31,"column":0},"end":{"row":51,"column":3},"action":"insert","lines":["use \\Doctrine\\Common\\Cache\\ApcCache;","use \\Doctrine\\Common\\Cache\\ArrayCache;","","// Register Doctrine DBAL","$app->register(new Silex\\Provider\\DoctrineServiceProvider(), array(","    // Doctrine DBAL settings goes here","));","","// Register Doctrine ORM","$app->register(new Nutwerk\\Provider\\DoctrineORMServiceProvider(), array(","    'db.orm.proxies_dir'           => __DIR__ . '/cache/doctrine/proxy',","    'db.orm.proxies_namespace'     => 'DoctrineProxy',","    'db.orm.cache'                 => ","        !$app['debug'] && extension_loaded('apc') ? new ApcCache() : new ArrayCache(),","    'db.orm.auto_generate_proxies' => true,","    'db.orm.entities'              => array(array(","        'type'      => 'annotation',       // entity definition ","        'path'      => __DIR__ . '/src',   // path to your entity classes","        'namespace' => 'MyWebsite\\Entity', // your classes namespace","    )),","));"],"id":4776}],[{"start":{"row":40,"column":19},"end":{"row":40,"column":26},"action":"remove","lines":["Nutwerk"],"id":4777},{"start":{"row":40,"column":19},"end":{"row":40,"column":24},"action":"insert","lines":["Silex"]}],[{"start":{"row":40,"column":34},"end":{"row":40,"column":60},"action":"remove","lines":["DoctrineORMServiceProvider"],"id":4779},{"start":{"row":40,"column":34},"end":{"row":40,"column":60},"action":"insert","lines":["DoctrineOrmServiceProvider"]}],[{"start":{"row":52,"column":0},"end":{"row":52,"column":1},"action":"insert","lines":["*"],"id":4780}],[{"start":{"row":52,"column":1},"end":{"row":52,"column":2},"action":"insert","lines":["/"],"id":4781}],[{"start":{"row":39,"column":24},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":4782}],[{"start":{"row":40,"column":0},"end":{"row":40,"column":1},"action":"insert","lines":["/"],"id":4783}],[{"start":{"row":40,"column":1},"end":{"row":40,"column":2},"action":"insert","lines":["*"],"id":4784}],[{"start":{"row":37,"column":3},"end":{"row":37,"column":4},"action":"insert","lines":["*"],"id":4785}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":5},"action":"insert","lines":["/"],"id":4786}],[{"start":{"row":34,"column":25},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":4787}],[{"start":{"row":35,"column":0},"end":{"row":35,"column":1},"action":"insert","lines":["/"],"id":4788}],[{"start":{"row":35,"column":1},"end":{"row":35,"column":2},"action":"insert","lines":["*"],"id":4789}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":1},"action":"insert","lines":["*"],"id":4790}],[{"start":{"row":33,"column":1},"end":{"row":33,"column":2},"action":"insert","lines":["/"],"id":4791}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":1},"action":"insert","lines":["/"],"id":4792}],[{"start":{"row":29,"column":1},"end":{"row":29,"column":2},"action":"insert","lines":["*"],"id":4793}],[{"start":{"row":26,"column":0},"end":{"row":48,"column":3},"action":"insert","lines":["$app->register(new Silex\\Provider\\DoctrineServiceProvider(), array(","    'db.options'    => array(","    'driver'        => 'pdo_mysql',","    'host'          => 'localhost',","    'dbname'        => 'name',","    'user'          => 'root',","    'password'      => '',","    'charset'       => 'utf8',","    'driverOptions' => array(1002 => 'SET NAMES utf8',),","  ),","));","","$app->register(new Dflydev\\Silex\\Provider\\DoctrineOrm\\DoctrineOrmServiceProvider, array(","    \"orm.em.options\" => array(","         \"mappings\" => array(","            array(","               \"type\"      => \"yml\",","               \"namespace\" => \"Entity\",","               \"path\"      => realpath(__DIR__.\"/../config/doctrine\"),","              ),","            ),","         ),","));"],"id":4794}],[{"start":{"row":44,"column":52},"end":{"row":44,"column":58},"action":"remove","lines":["config"],"id":4796},{"start":{"row":44,"column":52},"end":{"row":44,"column":53},"action":"insert","lines":["s"]}],[{"start":{"row":44,"column":53},"end":{"row":44,"column":54},"action":"insert","lines":["e"],"id":4797}],[{"start":{"row":44,"column":54},"end":{"row":44,"column":55},"action":"insert","lines":["t"],"id":4798}],[{"start":{"row":44,"column":55},"end":{"row":44,"column":56},"action":"insert","lines":["t"],"id":4799}],[{"start":{"row":44,"column":56},"end":{"row":44,"column":57},"action":"insert","lines":["i"],"id":4800}],[{"start":{"row":44,"column":57},"end":{"row":44,"column":58},"action":"insert","lines":["n"],"id":4801}],[{"start":{"row":44,"column":58},"end":{"row":44,"column":59},"action":"insert","lines":["g"],"id":4802}],[{"start":{"row":44,"column":59},"end":{"row":44,"column":60},"action":"insert","lines":["s"],"id":4803}],[{"start":{"row":44,"column":51},"end":{"row":44,"column":52},"action":"remove","lines":["/"],"id":4804}],[{"start":{"row":44,"column":50},"end":{"row":44,"column":51},"action":"remove","lines":["."],"id":4805}],[{"start":{"row":44,"column":49},"end":{"row":44,"column":50},"action":"remove","lines":["."],"id":4806}],[{"start":{"row":31,"column":24},"end":{"row":31,"column":28},"action":"remove","lines":["root"],"id":4807},{"start":{"row":31,"column":24},"end":{"row":31,"column":25},"action":"insert","lines":["x"]}],[{"start":{"row":31,"column":25},"end":{"row":31,"column":26},"action":"insert","lines":["1"],"id":4808}],[{"start":{"row":31,"column":26},"end":{"row":31,"column":27},"action":"insert","lines":["z"],"id":4809}],[{"start":{"row":31,"column":27},"end":{"row":31,"column":28},"action":"insert","lines":["k"],"id":4810}],[{"start":{"row":31,"column":28},"end":{"row":31,"column":29},"action":"insert","lines":["0"],"id":4811}],[{"start":{"row":30,"column":24},"end":{"row":30,"column":28},"action":"remove","lines":["name"],"id":4812},{"start":{"row":30,"column":24},"end":{"row":30,"column":25},"action":"insert","lines":["c"]}],[{"start":{"row":30,"column":25},"end":{"row":30,"column":26},"action":"insert","lines":["9"],"id":4813}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":1},"action":"insert","lines":["*"],"id":4814}],[{"start":{"row":49,"column":1},"end":{"row":49,"column":2},"action":"insert","lines":["/"],"id":4815}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["/"],"id":4816}],[{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"insert","lines":["*"],"id":4817}],[{"start":{"row":24,"column":31},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":4818}],[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":4819}],[{"start":{"row":17,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["","","","","",""],"id":4820}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"insert","lines":["."],"id":4821}],[{"start":{"row":20,"column":1},"end":{"row":20,"column":2},"action":"insert","lines":["."],"id":4822}],[{"start":{"row":20,"column":2},"end":{"row":20,"column":3},"action":"insert","lines":["."],"id":4823}],[{"start":{"row":20,"column":2},"end":{"row":20,"column":3},"action":"remove","lines":["."],"id":4824}],[{"start":{"row":20,"column":1},"end":{"row":20,"column":2},"action":"remove","lines":["."],"id":4825}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":["."],"id":4826}],[{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":4827}],[{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":4828}],[{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":4829}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":4830}],[{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":4831}],[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":4832}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":4833}],[{"start":{"row":24,"column":0},"end":{"row":25,"column":84},"action":"insert","lines":["$app->register(new Silex\\Provider\\DoctrineServiceProvider());","$app->register(new Dflydev\\Silex\\Provider\\DoctrineOrm\\DoctrineOrmServiceProvider());"],"id":4834}],[{"start":{"row":27,"column":0},"end":{"row":46,"column":2},"action":"insert","lines":["$app['db.options'] = array(","    'driver'   => 'pdo_mysql',","    'charset'  => 'utf8',","    'host'     => '127.0.0.1',","    'dbname'   => '',","    'user'     => '',","    'password' => '',",");","","$app['orm.proxies_dir'] = __DIR__.'/../cache/doctrine/proxies';","$app['orm.default_cache'] = 'array';","$app['orm.em.options'] = array(","    'mappings' => array(","        array(","            'type' => 'annotation',","            'path' => __DIR__.'/../../src',","            'namespace' => 'My\\\\Namespace\\\\To\\\\Entity',","        ),","    ),",");"],"id":4835}],[{"start":{"row":43,"column":28},"end":{"row":43,"column":53},"action":"remove","lines":["My\\\\Namespace\\\\To\\\\Entity"],"id":4836},{"start":{"row":43,"column":28},"end":{"row":43,"column":29},"action":"insert","lines":["E"]}],[{"start":{"row":43,"column":29},"end":{"row":43,"column":30},"action":"insert","lines":["b"],"id":4837},{"start":{"row":43,"column":30},"end":{"row":43,"column":31},"action":"insert","lines":["n"]}],[{"start":{"row":43,"column":30},"end":{"row":43,"column":31},"action":"remove","lines":["n"],"id":4838}],[{"start":{"row":43,"column":29},"end":{"row":43,"column":30},"action":"remove","lines":["b"],"id":4839}],[{"start":{"row":43,"column":29},"end":{"row":43,"column":30},"action":"insert","lines":["n"],"id":4840}],[{"start":{"row":43,"column":30},"end":{"row":43,"column":31},"action":"insert","lines":["t"],"id":4841}],[{"start":{"row":43,"column":31},"end":{"row":43,"column":32},"action":"insert","lines":["i"],"id":4842}],[{"start":{"row":43,"column":32},"end":{"row":43,"column":33},"action":"insert","lines":["t"],"id":4843}],[{"start":{"row":43,"column":33},"end":{"row":43,"column":34},"action":"insert","lines":["y"],"id":4844}],[{"start":{"row":43,"column":34},"end":{"row":43,"column":35},"action":"insert","lines":["\\"],"id":4845}],[{"start":{"row":43,"column":35},"end":{"row":43,"column":36},"action":"insert","lines":["e"],"id":4846}],[{"start":{"row":43,"column":36},"end":{"row":43,"column":37},"action":"insert","lines":["n"],"id":4847}],[{"start":{"row":43,"column":37},"end":{"row":43,"column":38},"action":"insert","lines":["t"],"id":4848}],[{"start":{"row":43,"column":38},"end":{"row":43,"column":39},"action":"insert","lines":["i"],"id":4849}],[{"start":{"row":43,"column":39},"end":{"row":43,"column":40},"action":"insert","lines":["d"],"id":4850}],[{"start":{"row":43,"column":40},"end":{"row":43,"column":41},"action":"insert","lines":["a"],"id":4851}],[{"start":{"row":43,"column":41},"end":{"row":43,"column":42},"action":"insert","lines":["d"],"id":4852}],[{"start":{"row":32,"column":19},"end":{"row":32,"column":24},"action":"insert","lines":["x1zk0"],"id":4853}],[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":["c"],"id":4854}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"insert","lines":["9"],"id":4855}]]},"ace":{"folds":[],"scrolltop":281,"scrollleft":0,"selection":{"start":{"row":31,"column":21},"end":{"row":31,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1473865537616,"hash":"78b40b84550135f2efe8e20405d84dd776fb9682"}