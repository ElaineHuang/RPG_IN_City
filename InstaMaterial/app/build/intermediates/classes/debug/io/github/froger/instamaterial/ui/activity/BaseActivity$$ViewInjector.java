// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.activity;

import android.view.View;
import butterknife.ButterKnife.Finder;
import butterknife.ButterKnife.Injector;

public class BaseActivity$$ViewInjector<T extends io.github.froger.instamaterial.ui.activity.BaseActivity> implements Injector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    View view;
    view = finder.findOptionalView(source, 2131558503, null);
    target.toolbar = finder.castView(view, 2131558503, "field 'toolbar'");
    view = finder.findOptionalView(source, 2131558540, null);
    target.ivLogo = finder.castView(view, 2131558540, "field 'ivLogo'");
  }

  @Override public void reset(T target) {
    target.toolbar = null;
    target.ivLogo = null;
  }
}
