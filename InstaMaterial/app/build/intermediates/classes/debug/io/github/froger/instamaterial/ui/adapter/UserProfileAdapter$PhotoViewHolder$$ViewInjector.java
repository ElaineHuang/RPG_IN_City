// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.adapter;

import android.view.View;
import butterknife.ButterKnife.Finder;
import butterknife.ButterKnife.Injector;

public class UserProfileAdapter$PhotoViewHolder$$ViewInjector<T extends io.github.froger.instamaterial.ui.adapter.UserProfileAdapter.PhotoViewHolder> implements Injector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    View view;
    view = finder.findRequiredView(source, 2131558554, "field 'flRoot'");
    target.flRoot = finder.castView(view, 2131558554, "field 'flRoot'");
    view = finder.findRequiredView(source, 2131558520, "field 'ivPhoto'");
    target.ivPhoto = finder.castView(view, 2131558520, "field 'ivPhoto'");
  }

  @Override public void reset(T target) {
    target.flRoot = null;
    target.ivPhoto = null;
  }
}
